<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
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

        $users = User::query()->get()->all();
        return view('admin.user.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = User::query()->findOrFail(Auth::id());
        return view('admin.user.create',['user' => $user]);
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
        $user =  User::query()->findOrFail(Auth::id());
        $users = User::query()->where('id',$id)->get()->all();
        return view('admin.user.show',['user' => $user,'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user =  User::query()->findOrFail(Auth::id());
        $users =  User::query()->where('id',$id)->get()->all();
        $roles =  Role::query()->get()->all();
        return view('admin.user.edit',['users' => $users , 'roles' => $roles,'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(User $user,UpdateUserRequest $request)
    {
        //

        $user->update([
            'role_id' => $request['role_id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return to_route('user.index');
//        $user = User::find($id);
//        $user->role_id = $request['role_id'];
//        $user->name = $request['name'];
//        $user->email = $request['email'];
//        $user->password = Hash::make($request['password']);
//        return to_route('user.index');
//        User::query()->update([
//            'role_id' => $request['role_id'],
//            'name' => $request['name'],
//            'email' => $request['email'],
//            'password' => Hash::make($request['password'])
//        ]);


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
