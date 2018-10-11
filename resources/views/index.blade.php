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

<h2 style="color:white">Top Jobs</h2>

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    @foreach($posts as $post)
    <li data-target="#myCarousel" data-slide-to="{{$post->id}}" class="active"></li>
    @endforeach
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach($posts as $post)
    @if($post->id == 1)
    <div class="item active">
      <div class="row">
        <div class="col-sm-6 col-md-12" >
          <div class="thumbnail" style="background-color: #abf2ec" >
            <div class="caption" >
              <h3>{{$post->title}}</h3>
              <p>{{$post->description}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="item">
      <div class="row">
      <div class="col-sm-6 col-md-12" >
        <div class="thumbnail" style="background-color: #abf2ec">
          <div class="caption">
            <h3>{{$post->title}}</h3>
              <p>{{$post->description}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach

  <!-- Left and right controls -->
  <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>

<h2 style="color: white">Browse More</h2>

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