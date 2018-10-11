@extends('layouts.master')
@section('title')
Admin Dashboard
@endsection

@section('content')
<div class="page-header">
  <h1>Admin Dashboard <small>Interest Customers Details</small></h1>
</div>

<table class="table table-hover">
  <tr>
    <th>Name</th>
    <th>City</th> 
    <th>State</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Account Type</th>
    <th>Account Number</th>
    <th>Routing Number</th>
    <th>Bank Name</th>
    <th>Username</th>
  </tr>
  @foreach($applications as $application)
    <tr>
      <td>{{$application->name}}</td>
      <td>{{$application->city}}</td>
      <td>{{$application->state}}</td>
      <td>{{$application->phone}}</td>
      <td>{{$application->email}}</td>
      @if($application->payment)
      <td>{{$application->payment->type}}</td>
      <td>{{$application->payment->account_number}}</td>
      <td>{{$application->payment->routing_number}}</td>
      <td>{{$application->payment->bank_name}}</td>
      <td>{{$application->payment->username}}</td>
      @endif
    </tr>
  @endforeach
</table>

@endsection