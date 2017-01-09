@extends('layouts.app')
@section('content')
 
	<div class="container">
  <a href="{{url('/admin/personal_info/add')}}" type="button" class="btn btn-success">Add</a>
  <h2>Personal Info</h2>
  <div class="col-md-9">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>D.O.B</th>
        <th>Address</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>Website</th>

        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach($personalInfos as $personalInfo)
      <tr>
        <td>{{$personalInfo['name']}}</td>
        <td>{{$personalInfo['description']}}</td>
        <td>{{$personalInfo['dob']}}</td>
        <td>{{$personalInfo['address']}}</td>
        <td>{{$personalInfo['phone_no']}}</td>
        <td>{{$personalInfo['email']}}</td>
        <td>{{$personalInfo['website']}}</td>
        <td>
        	
        	
        	<a href="{{url('/admin/personal_info/edit/'.$personalInfo['id'])}}" type="button" class="btn btn-info">Edit</a>
        	<a href="{{url('/admin/personal_info/delete/'.$personalInfo['id'])}}" type="button" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection