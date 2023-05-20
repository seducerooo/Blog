@extends('layouts.admin-panel')
@section('content')
    @foreach($users as $user)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <hr>
                <p class="card-text">{{ $user->slug }}</p>
                <hr>

                    <p class="card-text">{{ $user->role->name }}</p>
                @foreach($user->role->permissions as $permission)
                    <p class="card-text d-inline">  {{ $permission->name }}  </p> <br>
                @endforeach

                <hr>
                <p class="card-text"><small class="text-body-secondary">Last updated {{ $user->updated_at->diffForHumans() }} ago</small></p>
            </div>
        </div>
    @endforeach
@endsection
