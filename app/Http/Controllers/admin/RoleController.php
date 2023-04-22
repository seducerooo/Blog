<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles =  Role::query()->get()->all();
        return view('admin.role.index',['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        //
        Role::query()->create([
            'name' => $request['name'],
            'slug' => $request['slug'],
        ]);
        return to_route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $roles =  Role::query()->where('id',$id)->get();
        return view('admin.role.edit',['roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
        $role->update([
            'name' => $request['name'],
            'slug' => $request['slug'],
        ]);
        return to_route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
        $role->delete();
        return back();
    }

    public function  modify_attach(string $id){
        $role = Role::query()->where('id',$id)->get()->all();
        $permissions =  Permission::query()->get()->all();
        return view('admin.role.attach-modify',['permissions' => $permissions,'role'=> $role]);
    }

    public function attach(string $id,Request $request){
        $permission_id = $request['permission_id'];
        $role =  Role::query()->findOrFail($id);
        $role->permissions()->attach($permission_id);
        return to_route('role.index');
    }

    public function modify_detach(string $id){
        $role = Role::query()->where('id',$id)->get()->all();
        $permissions =  Permission::query()->get()->all();
        return view('admin.role.detach-modify',['permissions' => $permissions,'role'=> $role]);
    }
    public function detach(string $id, Request $request){
        $permission_id =  $request['permission_id'];
        $role = Role::query()->findOrFail($id);
        $role->permissions()->detach($permission_id);
        return to_route('role.index');

    }


}
