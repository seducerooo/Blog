@extends('layouts.admin-panel')
@section('content')
@foreach($posts as $post)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}
            <p class="card-text"><small class="text-body-secondary">Last updated {{ $post->updated_at->diffForHumans() }} ago</small></p>
        </div>
        <img src="{{ $post->post_image  }}" class="card-img-bottom" alt="post">
    </div>
@endforeach
@endsection
