@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Create Student</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <div class="col-12 row">
        
      <div class="col-md-4">
        <label>Firstname</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
      </div>
      <div class="col-md-4">
        <label>Lastname</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
      </div>
      <div class="col-md-4">
        <label>Birthdate</label></br>
        <input type="date" name="birthdate" id="birthdate" class="form-control"></br>
      </div>
      <div class="col-md-12">
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
      </div>
      <div class="col-md-3">
        <label>Course</label></br>
        <select class="form-select" name="course" id="course" aria-label="Default select example"> </br>
          <option selected>select course</option>
          <option value="BSA">BSA</option>
          <option value="BSBA">BSBA</option>
          <option value="BSIT">BSIT</option>
          <option value="BSCrim">BSCrim</option>
          <option value="BSEd">BSEd</option>
          <option value="BEEd">BEEd</option>
          <option value="BSHM">BSHM</option>
          <option value="BSTM">BSTM</option>
          <option value="ABPolSci">ABPolSci</option>
        </select>
      </div>
      <div class="col-md-3">
        <label>Year Level</label></br>
        <select class="form-select" name="yearlevel" id="yearlevel" aria-label="Default select example"> </br>
          <option selected>select year level</option>
          <option value="First-Year">First-Year</option>
          <option value="Second-Year">Second-Year</option>
          <option value="Third-Year">Third-Year</option>
          <option value="Fourth-Year">Fourth-Year</option>
        </select>
      </div>
      <div class="col-md-3">
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
      </div>
      <div class="col-md-3">
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
      </div>
        <div class="text-end">
            <input type="submit" value="Save" class="btn btn-success">
            <input href="" type="button" value="Cancel" class="btn btn-danger"></br>
        </div>
      </div>
    </form>
   
  </div>
</div>
 
@stop