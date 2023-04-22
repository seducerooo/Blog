@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Edit Permission</h1>
    @foreach($permissions as $permission)
        <form class="row g-3" method="POST" action="{{ route('permission.update',['permission' => $permission['id']]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label"><b>Name : </b></label>
                <input name="name" class="form-control" type="text" id="name" value="{{ $permission['name'] }}">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label"><b>Slug :</b></label>
                <input name="slug" class="form-control" type="text" id="slug" value="{{ $permission['slug'] }}">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>

        </form>
    @endforeach
@endsection
