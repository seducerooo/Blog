@extends('layouts.admin-panel')
@section('header')

    @include('admin.post.post_includes.post_header')

@endsection

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Roles</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <div class="text-right">
                <a href="{{ route('role.create') }}" class="btn btn-primary align-self-right">Create</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="RoleDataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Permission</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Permission</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->slug }}</td>

                        <td>
                            @foreach($role->permissions as $role_permissions)
                                {{ $role_permissions['name'] }} -
                            @endforeach
                        </td>

                        <td>
                            <a class="btn btn-warning" href="{{ route('role.edit',$role->id) }}">Edit</a>
                            <form method="POST" action="{{ route('role.delete',['role' => $role->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="DELETE">
                            </form>
                            <a class="btn btn-primary" href="{{ route('role.modify.attach',['id' =>$role->id]) }}">Attach</a>
                            <a class="btn btn-danger" href="{{ route('role.modify.detach',['id' => $role->id]) }}">Detach</a>
                        </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
