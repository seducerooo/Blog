@extends('layouts.admin-panel')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Attach Role</h1>

        @foreach($role  as $role_att)
    <form class="row g-3" method="POST" action="{{ route('role.attach',$role_att['id']) }}">
        @csrf

        <div class="mb-3">
            <select name="permission_id" class="form-select" aria-label="Default select example">
                <option selected>permissions</option>
                @foreach($permissions as $permission)
                <option value="{{$permission->id}}"> {{ $permission->name }} </option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Attach" class="btn btn-primary">

    </form>
        @endforeach

@endsection
