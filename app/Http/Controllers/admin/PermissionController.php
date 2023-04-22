<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $permissions = Permission::query()->get()->all();
        return view('admin.permission.index',['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        //
        Permission::query()->create([
            'name' => $request['name'],
            'slug' => $request['slug']
        ]);
        return to_route('permission.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $permissions = Permission::query()->where('id',$id)->get();
        return view('admin.permission.edit',['permissions'=> $permissions]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Permission $permission, UpdatePermissionRequest $request)
    {
        //
//        dd($request->toArray());
        $permission->update([
            'name' => $request['name'],
           'slug' => $request['slug']
        ]);
        return to_route('permission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
        $permission->delete();
        return back();
    }
}