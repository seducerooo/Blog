@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Create Post</h1>
    <form class="row g-3" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label"><b>Image : </b></label>
            <input name="post_image" class="form-control" type="file" id="image">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label"><b>Title :</b></label>
            <input name="title" class="form-control" type="text" id="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label"><b>Content :</b></label>
            <textarea name="content" class="form-control" id="content" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>

    </form>

@endsection
