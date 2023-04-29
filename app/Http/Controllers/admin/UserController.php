<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $logged_user = User::query()->findOrFail(Auth::id());
        $users = User::query()->get()->all();
        return view('admin.user.index',['users' => $users,'logged_user' => $logged_user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
        User::query()->create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])

        ]);
        return to_route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $users =  User::query()->where('id',$id)->get()->all();
        $roles =  Role::query()->get()->all();
//        dd($user);
        return view('admin.user.edit',['users' => $users , 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(StoreUserRequest $request,string $id)
    {
        //
        $user = User::query()->findOrFail($id);
        $user->role_id = $request['role_id'];
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return to_route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( User $user)
    {
        $user->delete();
        return back();
        //
    }
}
