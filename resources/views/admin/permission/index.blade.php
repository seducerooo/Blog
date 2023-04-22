@extends('layouts.admin-panel')
@section('header')

    @include('admin.post.post_includes.post_header')

@endsection

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Permissions</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <div class="text-right">
                <a href="{{ route('permission.create') }}" class="btn btn-primary align-self-right">Create</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="PermissionDataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>slug</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>slug</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($permissions as $permission)
                    <tr>

                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->slug }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('permission.edit',['id' => $permission->id]) }}">edit</a>
                            <form method="post" action="{{ route('permission.delete',['permission' => $permission->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="DELETE">
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
