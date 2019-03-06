<?php

namespace App\Http\Controllers\front;
use App\category;
use App\posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HTTP\Requests\ContactRequest;
use App\Contact;

use Illuminate\Support\Facades\Mail;
use App\Tag;
class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Posts::all();
        $tags = Tag::all();
        $cat = Category::all();
        return view('front/contact' , compact('cat', 'tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     /*   $tag= Tag::all();
        $cat = Category::all();
        return view('front/contact', compact('cat', 'tag'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        //
        Mail::to('dorraselmi7@gmail.com')->send(new \App\Mail\Contact($request->except('_token')));
     /*   Contact::create($request->all());*/
        return back();
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
        $tags = Tag::all();
        $cat = Category::all();
        return view('front/contact', compact('cat'), compact( 'tags'));
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
