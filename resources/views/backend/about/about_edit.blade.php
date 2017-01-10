@extends('layouts.app')
@section('content')
 
  @if(isset($about))
  <form class="form-horizontal" action="{{url('/admin/about/update/'.$about['id'])}}" method="post">

    {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2"  for="description">Description:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="description" id="description" value="" placeholder="Enter Description">{{$about['description']}}</textarea>
      </div>
    </div>

    

      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default ">Submit</button>
      </div>
    </div>
   
    
</form>
@endif
@if(isset($award))
  <form class="form-horizontal" action="{{url('/admin/about/updateAward/'.$award['id'])}}" method="post">

    {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2"  for="award">Awards:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="award" id="award" value="" placeholder="Enter Awards">{{$award['award']}}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2"  for="about_id">About_Id:</label>
      <div class="col-sm-10">
        <input class="form-control" name="award" id="about_id" value="{{$award['about_id']}}" placeholder="Enter about Id">{{$award['about_id']}}
      </div>
    </div>

    

      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default ">Submit</button>
      </div>
    </div>
   
    
</form>
@endif

  
@endsection