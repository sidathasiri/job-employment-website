@extends('layouts.master')
@section('title')
Payment Details
@endsection

@section('content')
<div class="page-header">
  <h1>Payment Details</h1>
</div>

<form class="form-horizontal">
<div class="form-group">
  <label for="type" class="col-sm-2 control-label">Account Type</label>
  <div class="col-sm-2">
    <select class="form-control" id="type" name="type">
        <option value="Savings">Savings</option>
        <option value="Checking">Checking</option>
    </select>
  </div>
</div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Account holder's Name</label>
    <div class="col-sm-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Account holder's Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" class="form-control" id="name" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="accountNumber" class="col-sm-2 control-label">Account number</label>
    <div class="col-sm-6">
      <input type="text" name="accountNumber" class="form-control" id="accountNumber" placeholder="Account Number">
    </div>
  </div>
  <div class="form-group">
    <label for="routingNumber" class="col-sm-2 control-label">Routing number</label>
    <div class="col-sm-6">
      <input type="text" name="routingNumber" class="form-control" id="routingNumber" placeholder="Routing Number">
    </div>
  </div>
  <div class="form-group">
    <label for="bankName" class="col-sm-2 control-label">Bank name</label>
    <div class="col-sm-6">
      <input type="text" name="bankName" class="form-control" id="bankName" placeholder="Bank Name">
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">Bank Address</label>
    <div class="col-sm-5">
                <textarea class="form-control" rows="6" id="description" name="description"></textarea>
              </div>
    </div>
    <div class="form-group">
    <label for="question1" class="col-sm-2 control-label">Security Question 1</label>
    <div class="col-sm-6">
      <input type="text" name="question1" class="form-control" id="question1" placeholder="Question 1">
    </div>
    </div>

    <div class="form-group">
    <label for="question1Ans" class="col-sm-2 control-label">Question 1 Answer</label>
    <div class="col-sm-6">
      <input type="text" name="question1Ans" class="form-control" id="question1Ans" placeholder="Question 1 Answer">
    </div>
    </div>

    <div class="form-group">
    <label for="question2" class="col-sm-2 control-label">Security Question 2</label>
    <div class="col-sm-6">
      <input type="text" name="question2" class="form-control" id="question2" placeholder="Question 2">
    </div>
    </div>

    <div class="form-group">
    <label for="question2Ans" class="col-sm-2 control-label">Question 2 Answer</label>
    <div class="col-sm-6">
      <input type="text" name="question2Ans" class="form-control" id="question2Ans" placeholder="Question 2 Answer">
    </div>
    </div>

    <div class="form-group">
    <label for="question3" class="col-sm-2 control-label">Security Question 3</label>
    <div class="col-sm-6">
      <input type="text" name="question3" class="form-control" id="question3" placeholder="Question 3">
    </div>
    </div>

    <div class="form-group">
    <label for="question3Ans" class="col-sm-2 control-label">Question 3 Answer</label>
    <div class="col-sm-6">
      <input type="text" name="question3Ans" class="form-control" id="question3Ans" placeholder="Question 3 Answer">
    </div>
    </div>

    <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Online Username</label>
    <div class="col-sm-6">
      <input type="text" name="username" class="form-control" id="username" placeholder="Online Username">
    </div>
    </div>

    <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
    </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
  {{ csrf_field() }}
</form>
@endsection