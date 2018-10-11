@extends('layouts.master')
@section('title')
Add job data
@endsection

@section('content')
<div class="page-header">
  <h1>Job Data <small>Add new job</small></h1>
</div>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
<form class="form-horizontal" action="/admin/addjob" method="post">
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-5">
                    <input name="title" type="text" class="form-control" id="title" placeholder="Title">
                </div>
            </div>
            <div class="form-group">
              <label for="description" class="col-sm-2 control-label">Description</label>
              <div class="col-sm-5">
                <textarea class="form-control" rows="10" id="description" name="description"></textarea>
              </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
            {{ csrf_field() }}
  </form>

@endsection