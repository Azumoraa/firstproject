@extends('layouts.app')
@section('content')
 
 
  <form class="form-horizontal" action="{{url('/admin/personal_info/create')}}" method="post">

    {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2"  for="text">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" id="text" placeholder="Enter Full Name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2"  for="text">Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="description" id="description" placeholder="Describe Your self">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2"  for="text">D.O.B:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter Full date of birth">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2"  for="text">Address:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2"  for="text">Mobile No.:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Mobile No.">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2"  for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Full Name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2"  for="url">Website:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="website" id="website" placeholder="Enter your website">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2"  for="images">Image:</label>
      <div class="col-sm-10">
        <input type="file" class="btn btn-primary btn-file" name="images" id="images" >
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default ">Submit</button>
      </div>
    </div>
   
    
</form>


  
@endsection