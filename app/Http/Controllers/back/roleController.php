<?php

namespace App\Http\Controllers\back;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\HTTP\Requests\RoleRequest;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class roleController extends Controller
{
    //

    public function index()
    {
        //
        $perm = Permission::all();
        $role = Role::all();
        return view('role-perme/listrole', compact('role'), compact('perm'));
    }

    public function create()
    {
        //
        $perm = Permission::all();
        return view('role-perme/createrole', compact('perm'));
    }
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
        ]);
        $role = new Role();
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->perm);
        return redirect()->route('role.index');
    }
    public function edit($id)
    {
        //
        $perm = Permission::all();
        $roledit = Role::find($id);
        return view('role-perme/editrole', compact('roledit'),  compact('perm'));
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'perm'=>'required'
        ]);

        $rol = Role::find($id);

        $rol->name = $request->name;
        $rol->save();
        $rol->syncPermissions($request->perm);
        return redirect()->route('role.index');

    }

    public function destroy($id)
    {
        //
        $rol= Role::find($id);
        $rol->delete();
        return redirect()->route('role.index');
    }
}
