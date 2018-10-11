@extends('layouts.master')
@section('title')
Contact
@endsection

@section('content')
<div class="page-header">
  <h1>Contact</h1>
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
    <label for="name" class="col-sm-2 control-label">Account holder's name</label>
    <div class="col-sm-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
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
    <label for="address" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-5">
                <textarea class="form-control" rows="6" id="description" name="description"></textarea>
              </div>
    </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection