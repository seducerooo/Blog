@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create User</h1>
    <form class="row g-3" method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"><b>Name : </b></label>
            <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" id="name" >
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><b>Email :</b></label>
            <input name="email" class="form-control @error('email') is-invalid @enderror" type="text" id="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label"><b>Password :</b></label>
            <input name="password" class="form-control @error('password') is-invalid @enderror" type="text" id="password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>

    </form>

@endsection
