@extends('layouts.master')
@section('title')
Admin Signin
@endsection

<!-- <div class="row">
   <div class="col-lg-6 col-lg-offset-3 text-center">center</div>
</div> -->

@section('content')
<div class="row">
    <div class="col-lg-8 col-lg-offset-3">
    <h2 style="margin-bottom:30px; margin-left:120px">Admin Signin</h2>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
        <form class="form-horizontal" action="/admin/signin" method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-4">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection