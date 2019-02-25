<?php

namespace App\Http\Controllers\back;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use App\Tag;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $categories = Category::all();
        $posts = Posts::all();
        return view('posts/list')->with(compact('posts','categories'));
        //compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    $tags = Tag::all();
        $categories = Category::all();
        return view('posts/create', compact('categories'), compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'description' => 'required',
        ]);
       /* if($request->hasFile('image'))
        {
            $postmg = $request->image->store('public');
        }
        else{
            return "no";
        }*/
        $path = Storage::disk('images')->put('', $request->file('image'));
        $image = InterventionImage::make($request->file('image'))->widen(100);

        Storage::disk('thumbs')->put($path, $image->encode());
        $post = new Posts();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->file = $path;
        $post->category_id = $request->category;
        $post->save();

        $post->tags()->sync($request->tags, false);

        return redirect()->route('posts.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tags = Tag::all();
        $categories = Category::all();
        $postedit = Posts::find($id);
        return view('posts/edit', compact('postedit', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'description'=> 'required',

            ]);
        $postedi = new Posts();
        $post = $postedi::find($id);

        $post->title = $request->title;
       
        $post->description = $request->description;
        $post->category_id = $request->category;
        $post->save();
        $post->tags()->sync($request->tags);


        return redirect()->route('posts.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $posts= posts::find($id);
        $posts->delete();
        return redirect()->route('posts.index');

    }
}
