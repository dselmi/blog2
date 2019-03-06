<?php

namespace App\Http\Controllers\front;

use App\Category;
use App\Tutoriel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Posts;
class taggController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cat = Category::all();
        $tags = Tag::all();
        return view('front/tag', compact('tags', 'cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      /*  $cat = Category::all();
        $tag = Tag::all();
        return view('front/tag', compact('tag', 'cat'));*/
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
        $tagg = Tag::find($id);
        $cat = Category::all();
        $tags = Tag::all();
        $post = Posts::all();
        $tut = Tutoriel::all();
        return view('front/tag')->with(compact('post','tags', 'cat', 'tagg', 'tut'));
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
    }
}
