@extends('layouts.master')
@section('title')
Admin Profile
@endsection

@section('content')
<div class="page-header">
  <h1>Admin Profile <small>Change credintials</small></h1>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Change email</div>
  <div class="panel-body">
  <form class="form-inline" action="{{route('updateEmail')}}" method="post">
    <div class="form-group">
        <label for="exampleInputName2">New Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="New Email">
    </div>
    <button type="submit" class="btn btn-primary">Update Email</button>
    {{ csrf_field() }}
    </form>
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">Change Password</div>
  <div class="panel-body">
  <form class="form-inline" action="{{route('updatePassword')}}" method="post">
    <div class="form-group">
        <label for="exampleInputName2">New Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
    </div>
    <button type="submit" class="btn btn-primary">Update Password</button>
    {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection