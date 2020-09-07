@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{route('users.create')}}" class="btn btn-success mb-2">Add</a>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                    <td>
                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-outline-info float-left">Edit</a>
                        <form action="{{route('users.destroy',$user->id)}}" method="POST" class="float-left ml-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach    
            </tbody>
        </table>
    </div>
</div>
@endsection
