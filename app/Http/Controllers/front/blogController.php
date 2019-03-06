<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Posts;
use App\Tag;
use App\Comment;
use App\user;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $role = Role::findById(4);
       //$permession = Permission::findById(7);
     //  $user = User::find(6);
       //$role = Role::create(['name' => 'supp']);
       //$permession = Permission::create(['name' => 'delett']);
        //$permession = Permission::create(['name' => 'creator']);

       // $role = Role::create(['name' => 'deletor']);

        //$role->givePermissionTo($permession);
     //   $user->givePermissionTo('editor');
        //$user->assignRole('deletor');
        //$para = $user->permissions;
        //$para = $user->getAllpermissions();
       // $para = $user->getDirectPermissions();
       // $para = $user->getPermissionsViaRoles();
        //$para = $user->getRoleNames();
       //
      //$permession->assignRole($role);
      // $role->revokePermissionTo($permession);
       // $permession->removeRole($role);

        $tags = Tag::all();
        $cat = Category::all();
        $post = Posts::all();
        return view('front/acceuil', compact('tags','post','cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       /* $tag = Tag::all();
        $cat = Category::all();
        return view('front/acceuil', compact('cat'),  compact('tag'));*/

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
        $tags = Tag::all();
        $post = Posts::find($id);
        $cat = Category::all();
        return view('front/blog')->with(compact('cat','post', 'tags'));
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

    public function add(Request $request, $id){

        $this->validate($request,[
            'description'=>'required',
        ]);

        $com = new Comment();
        $com->description = $request->description;

        $post = Posts::find($id);
        $post->comment()->save($com);
        $com->save();
        return back();

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
