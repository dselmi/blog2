<?php

namespace App\Http\Controllers\back;

use App\Comment;
use App\Tag;
use App\Tutoriel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class tutorielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tags = Tag::all();
        $tuto = Tutoriel::all();
        return view('tutoriel/listtutoriel', compact('tuto', 'tags'));
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
        return view('tutoriel/createtutoriel', compact('tags'));
    }


    public function store(Request $request)
    {
        //dd($request);

        $this->validate($request,[
            'name'=>'required',
            'description' => 'required',
        ]);


        $path = Storage::disk('images')->put('', $request->file('file'));
        $image = InterventionImage::make($request->file('file'))->widen(100);

        Storage::disk('thumbs')->put($path, $image->encode());



        $tuto = new Tutoriel();
        $tuto->name = $request->name;
        $tuto->description = $request->description;
        $tuto->file = $path;
        $tuto->save();
        $tuto->tags()->sync($request->tags, false);
        return redirect()->route('tutoriel.index');

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
        $tut   = Tutoriel::find($id);
        return view('comment/comment', compact('tut'));

    }

    public function add(Request $request, $id){

        $this->validate($request,[
            'description'=>'required',
        ]);

        $com = new Comment();
        $com->description = $request->description;

        $tut = Tutoriel::find($id);
        $tut->comment()->save($com);
        $com->save();
        $tuto = Tutoriel::all();
        return view('tutoriel/listtutoriel', compact('tuto'));

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
        $tutoedit = Tutoriel::find($id);
        return view('tutoriel/edittutoriel', compact('tutoedit','tags'));
    }

    /****
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
            'name'=>'required',
            'description'=>'required',
        ]);
        $tuto = new Tutoriel();
        $tut = $tuto::find($id);

        $tuto->name = $request->name;
        $tuto->description = $request->description;
        $tuto->save();
        $tuto->tags()->sync($request->tags);

        return redirect()->route('tutoriel.index');
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
        $tuto= Tutoriel::find($id);
        $tuto->delete();
        return redirect()->route('tutoriel.index');
    }
}
