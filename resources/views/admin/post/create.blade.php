@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create Role</h1>
    <form class="row g-3" method="POST" action="{{ route('permission.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"><b>Name : </b></label>
            <input name="name" class="form-control" type="text" id="name">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label"><b>Slug :</b></label>
            <input name="slug" class="form-control" type="text" id="slug">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>

    </form>

@endsection
