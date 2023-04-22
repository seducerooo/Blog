@extends('layouts.admin-panel')
@section('header')

    @include('admin.post.post_includes.post_header')

@endsection

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <div class="text-right">
                <a href="{{ route('user.create') }}" class="btn btn-primary align-self-right">Create</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="PostDataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                    <tr>

                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>
{{--                            <form method="post" action="{{ route('user.edit',['id' => $user->id]) }}">--}}
{{--                                @csrf--}}
{{--                                @method('PUT')--}}
{{--                                <button type="submit" class="btn btn-primary">Edit</button>--}}
{{--                            </form>--}}
                            <a class="btn btn-primary" href="{{ route('user.edit',['id' => $user->id]) }}">Edit</a>

                            <form method="post" action="{{ route('user.delete',['user' => $user->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
