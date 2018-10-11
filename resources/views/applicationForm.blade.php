@extends('layouts.master')
@section('title')
Application Form
@endsection

@section('content')
<div class="page-header">
  <h1>Application Form <small>Personal Information Required for an Employment Application</small></h1>
</div>

<form class="form-horizontal">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="city" class="col-sm-2 control-label">City</label>
    <div class="col-sm-5">
      <input type="text" name="city" class="form-control" id="city" placeholder="City">
    </div>
  </div>
  <div class="form-group">
    <label for="state" class="col-sm-2 control-label">State</label>
    <div class="col-sm-5">
      <input type="text" name="state" class="form-control" id="state" placeholder="State">
    </div>
  </div>
  <div class="form-group">
    <label for="zip" class="col-sm-2 control-label">Zip Code</label>
    <div class="col-sm-5">
      <input type="text" name="zip" class="form-control" id="zip" placeholder="Zip Code">
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone Number</label>
    <div class="col-sm-5">
      <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone Number">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="name" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="securityNumber" class="col-sm-2 control-label">Social Security number</label>
    <div class="col-sm-6">
      <input type="text" name="securityNumber" class="form-control" id="securityNumber" placeholder="Social Security number">
    </div>
  </div>
  <div class="form-group">
    <label for="q1" class="col-sm-2 control-label">Are you eligible to work in the United States? </label>
    <div class="col-sm-6">
      <div class="radio">
        <label><input type="radio" name="isEligible" checked>Yes</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="isEligible">No</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="q2" class="col-sm-2 control-label">If you are under age eighteen, do you have an employment certificate? </label>
    <div class="col-sm-6">
      <div class="radio">
        <label><input type="radio" name="haveCertificate" checked>Yes</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="haveCertificate">No</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="q3" class="col-sm-2 control-label">Have you been convicted of a felony within the last five years?  </label>
    <div class="col-sm-6">
      <div class="radio">
        <label><input type="radio" name="isConvicted" checked>Yes</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="isConvicted">No</label>
      </div>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
      <p style="color:white; margin-top:12px">SUBMIT YOUR DETAILS  FOURTH PAGE</p>
    </div>
  </div>
  {{ csrf_field() }}
</form>
@endsection