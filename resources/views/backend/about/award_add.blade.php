@extends('layouts.app')
@section('content')	


	   <form class="form-inline" action="{{url('/admin/about/createAward')}}" method="post">
   {{csrf_field()}}
   <div class="form-group">
      <label class="control-label col-sm-2"  for="id">About's Id:</label>
      <div class="col-sm-10">
        <input class="form-control "  name="about_id" id="id" Value="{{$id}}" placeholder="awards">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2"  for="award">Awards:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="award" id="award" placeholder="awards"></textarea>
      </div>
    </div>
   
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default ">Submit</button>
      </div>
    </div>
  </form>
@endsection 
