@extends('layouts.management')
@section('content')
<div class="row m-b-30" >
        <div class="col"><h2>Manage Roles</h2></div>
        <div class="col text-right"><a class="btn btn-success btn-lg" href="{{route('roles.create')}}">Add New Role</a></div>
    </div>
    <table class="table table-striped shadow p-3 table-bordered">
        <thead class="bg-secondary text-white">
            <tr>
            <th>S.N.</th>
            <th>Display Name</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
        </thead>
        @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->display_name}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->description}}</td>
                <td><a class="btn btn-dark btn-sm" href="{{route('roles.show', $role->id)}}">View</a>
                    <a class="btn btn-primary btn-sm" href="{{route('roles.edit', $role->id)}}">Edit</a>

                    {{-- <form action="{{route('users.destroy', $user->id)}}" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-danger btn-sm m-t-10">Delete</button>

                    </form> --}}
                </td>
            </tr>
        @endforeach
    </table>

    {{-- <div class="d-flex justify-content-center">
        {{$users->render()}}
    </div> --}}
@endsection
