<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\HTTP\Requests\PermissionRequest;
class permissionsController extends Controller
{
    //
    public function index()
    {
        //
        $perm = Permission::all();
        return view('role-perme/listpermissions', compact('perm'));
    }

    public function create()
    {
        //

        return view('role-perme/createpermissions');
    }
    public function store(Request $request)
    {
        //
        //Permission::create($request->all());
        $this->validate($request,[
            'name'=>'required',
        ]);

        $perm = new Permission();
        $perm->name = $request->name;
        $perm->save();

        return redirect()->route('permission.index');
    }
    public function edit($id)
    {
        //

        $permedit = Permission::find($id);
        return view('role-perme/editperm', compact('permedit'));
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'required',
        ]);
        $perme = new Permission();
        $perm = $perme::find($id);

        $perm->name = $request->name;
        $perm->save();
        return redirect()->route('permission.index');

    }
    public function destroy($id)
    {
        //
        $perm= Permission::find($id);
        $perm->delete();
        return redirect()->route('permission.index');
    }

}
