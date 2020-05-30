<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::whereNotIn('name',['SuperAdmin'])->paginate(4);
        return view('backend.users.roles.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission=Permission::all();
        return view('backend.users.roles.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->save();
        if($request->has('permission')){
           $role->givePermissionTo($request->permission);
        }
        return redirect(route('role.index'))->withStatus('Role sucessfully created');  
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
        $role = Role::findById($id);
        $permission = $role->permissions()->get()->pluck('name');
        $allPermissions = Permission::all()->pluck('name');
        return view('backend.users.roles.edit',compact('role','permission','allPermissions'));
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
       $role = Role::findById($id);
       $role->name = $request->name;
       $role->save();
       if($request->has('permission'))
       {
        $permissionAll = Permission::all();
        $role->revokePermissionTo($permissionAll);
        foreach($request->permission as $permission){
            $newPermission = $permission;
            $role->givePermissionTo($newPermission);
        }
       }
       return redirect(route('role.edit',$id))->withStatus('Role Sucessfully Updated');
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
