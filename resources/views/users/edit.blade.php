@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('users.update',$user->id)}}" method="POST" class="col-md-6 mx-auto" >
@csrf
@method('PUT')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label>Roles</label>
    @foreach ($roles as $role)
    <div class="form-check">
      <input class="form-check-input" name="roles[]" type="checkbox" value="{{$role->id}}" id="{{$role->id}}" @if($user->roles()->get()->pluck('id')->contains($role->id)) checked @endif >
      <label class="form-check-label" for="{{$role->id}}">
        {{$role->name}}
      </label>
    </div>
    @endforeach
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
