@extends('layouts.app')
@section('content')
 <div class="container">
  
  
  <a href="{{url('/admin/about/add')}}" type="button" class="btn btn-success">Add</a>
  
  </div>

	<div class="container">
  
  <div class="col-md-6">
  <h2>About</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach($abouts as $about)
      <tr>
       
        <td>{{$about['description']}}</td>
        <td>{{$about['status']}}</td>
        
        <td>
        	
        	<a href="{{url('/admin/about/edit/'.$about['id'])}}" type="button" class="btn btn-info">Edit</a>
        	<a href="{{url('/admin/about/delete/'.$about['id'])}}" type="button" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>


  
  <div class="col-md-6">
  <h2>About_Awards</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Awards</th>
        <th>Status</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach($about as $about)
      <tr>
       
        <td>{{$about['award']}}</td>
        <td>{{$about['status']}}</td>
        
        <td>
          
          <a href="{{url('/admin/about/edit/'.$about['id'])}}" type="button" class="btn btn-info">Edit</a>
          <a href="{{url('/admin/about/delete/'.$about['id'])}}" type="button" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
@endsection