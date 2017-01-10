@extends('layouts.app')
@section('content')
 <div class="container">
  
  
  <a href="{{url('/admin/about/add')}}" type="button" class="btn btn-success">Add Description</a>
  
  </div>

	<div class="container">
  
  <div class="col-md-6">
  <h2>About</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Description</th>
        <th>Des_status</th>
        <th>Des_action</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach($abouts as $about)
      <tr>
       
        <td>{{$about['description']}}</td>
        
        <td>{{$about['status']}}
            <a href="{{url('/admin/about/statuschange/'.$about['id'])}}" type="button" class="btn btn-info">Change</a>
          </td>
        <td>
        	<a href="{{url('/admin/about/edit/'.$about['id'])}}" type="button" class="btn btn-info">Edit</a>
        	<a href="{{url('/admin/about/delete/'.$about['id'])}}" type="button" class="btn btn-danger">Delete</a>
          <a href="{{url('/admin/about/addAward/'.$about['id'])}}" type="button" class="btn btn-success">Add Award</a>
        </td>
        

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
   <div class="col-md-6">
  <h2>Awards</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>About id</th>
        <th>Awards</th>
        <th>Status</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach($awards as $award)
      <tr>
        <td>{{$award['about_id']}}</td>
        <td>{{$award['award']}}</td>
        
        <td>{{$award['status']}}
            <a href="{{url('/admin/about/statuschangeAward/'.$award['id'])}}" type="button" class="btn btn-info">Change</a>
          </td>
        <td>
          
          <a href="{{url('/admin/about/editAward/'.$award['id'])}}" type="button" class="btn btn-info">Edit</a>
          <a href="{{url('/admin/about/deleteAward/'.$award['id'])}}" type="button" class="btn btn-danger">Delete</a>
        </td>
        

      </tr>
      @endforeach
    </tbody>
  </table>
  </div> 

</div>
@endsection