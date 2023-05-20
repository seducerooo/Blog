@extends('layouts.admin-panel')
@section('content')
    @foreach($roles as $role)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $role->name }}</h5>
                <hr>
                <p class="card-text">{{ $role->slug }}</p>
                <hr>
                @foreach($role->permissions as $role_permission)
                    <p class="card-text">{{ $role_permission->name }}</p>
                @endforeach
                <hr>
                <p class="card-text"><small class="text-body-secondary">Last updated {{ $role->updated_at->diffForHumans() }} ago</small></p>
            </div>
        </div>
    @endforeach
@endsection
