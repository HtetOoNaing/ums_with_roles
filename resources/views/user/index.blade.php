@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-outline-info">Edit</a>
                        <a href="" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach    
            </tbody>
        </table>
    </div>
</div>
@endsection
