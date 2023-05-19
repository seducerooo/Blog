@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Edit User</h1>
    @foreach($users as $user)
    <form class="row g-3" method="POST" action="{{ route('user.update',['user' => $user->id]) }}">

        @csrf
        @method('put')
        <div class="mb-3">
            <select name="role_id" class="form-select" aria-label="Default select example">
                <option selected>roles</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}"> {{ $role->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label"><b>Name : </b></label>
            <input name="name" class="form-control" type="text" id="name" value="{{ $user['name'] }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><b>Email :</b></label>
            <input name="email" class="form-control" type="text" id="email" value="{{ $user['email'] }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"><b>Password :</b></label>
            <input name="password" class="form-control" type="text" id="password">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Update">
        </div>

    </form>
    @endforeach
@endsection
