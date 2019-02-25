<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\HTTP\Requests\UserRequest;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $role = Role::findById(4);
        //$permession = Permission::findById(7);
        $user = User::find(4);
        //$role = Role::create(['name' => 'supp']);
        //$permession = Permission::create(['name' => 'delett']);
        //$permession = Permission::create(['name' => 'creator']);

         $role = Role::create(['name' => 'Admin']);

        //$role->givePermissionTo($permession);
        //$user->givePermissionTo('editor');
        $user->assignRole('Admin');
        //$para = $user->permissions;
        //$para = $user->getAllpermissions();
        $para = $user->getDirectPermissions();
        // $para = $user->getPermissionsViaRoles();
        $para = $user->getRoleNames();
        //

        return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        User::create($request->all());
        return redirect()->route('admin');
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
