@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('users.store')}}" method="POST" class="col-md-6 mx-auto" >
@csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" value="" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label>Roles</label>
    @foreach ($roles as $role)
    <div class="form-check">
      <input class="form-check-input" name="roles[]" type="checkbox" value="{{$role->id}}" id="{{$role->id}}">
      <label class="form-check-label" for="{{$role->id}}">
        {{$role->name}}
      </label>
    </div>
    @endforeach
  </div>

  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@endsection
