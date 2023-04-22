@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Edit Post</h1>
    @foreach($posts as $post)
    <form class="row g-3" method="post" action="{{ route('post.update',['id' => $post->id ]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label"><b>Image : </b></label>
            <img src="{{ $post->post_image }}">
            <input name="post_image" class="form-control" type="file" id="image">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label"><b>Title :</b></label>
            <input name="title" class="form-control" type="text" id="title" multiple value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label"><b>Content :</b></label>
            <textarea name="content" class="form-control" id="content" rows="3">{{ value($post->content) }}</textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>

    </form>
    @endforeach
@endsection
