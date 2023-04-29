@extends('layouts.admin-panel')
@section('header')

@include('admin.post.post_includes.post_header')

@endsection

@section('content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Posts</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                <div class="text-right">
                    @foreach($logged_user as $user)
                        @can('create', $user)
                <a href="{{ route('post.create') }}" class="btn btn-primary align-self-right">Create</a>
                        @endcan
                    @endforeach
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="PostDataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><img src="{{ $post->post_image }}"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                @can('isAdmin',$user)

                                <a class="btn btn-warning" href="{{ route('post.edit',$post->id) }}">EDIT</a>

                                <form  method="POST" action="{{ route('post.delete',['post' => $post->id] ) }}" >
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger type=" type="submit" value="DELETE">
                                </form>

                                @endcan

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
