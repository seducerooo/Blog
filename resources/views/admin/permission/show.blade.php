@extends('layouts.admin-panel')
@section('content')
    @foreach($permissions as $permission)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $permission->name }}</h5>
                <hr>
                <p class="card-text">{{ $permission->slug }}</p>
                <hr>
                @foreach($permission->roles as $permission_role)
                <p class="card-text">{{ $permission_role->name }}</p>
                @endforeach
                <hr>
                <p class="card-text"><small class="text-body-secondary">Last updated {{ $permission->updated_at->diffForHumans() }} ago</small></p>
            </div>
        </div>
    @endforeach
@endsection
