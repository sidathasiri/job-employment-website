@extends('layouts.master')

@section('title')
    Job App
@endsection

@section('content')
<div class="jumbotron">
  <h1>Welcome to jobus.com</h1>
  <p>jobus.com  is the worldwide leader in successfully connecting people to job opportunities.</p>
  <p>From  mobile,to the web, to social, we help companies find people with customised solutions and we use the world's most advanced technology to match and search the perfect people to the right job.</p>
</div>

@foreach($posts as $post)
<!-- <div class="well"> -->
  <div class="panel panel-primary">
    <div class="panel-heading">{{$post->title}}</div>
      <div class="panel-body">
        {{$post->description}}
      </div>
      @if(Auth::check())
      <div class="clearfix">
      <a href="{{{ url('/admin/deletepost',$post->id) }}}" style="margin:10px" class="btn btn-sm btn-danger pull-right" id="{{$post->id}}">Delete</a>
      </div>
      @endif
  </div>
<!-- </div> -->
@endforeach
@endsection