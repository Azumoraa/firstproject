@extends('layouts.app')
@section('content')	


	 <form class="form-inline" action="{{url('/admin/about/create')}}" method="post">
   {{csrf_field()}}
	 <div class="form-group">
      <label class="control-label col-sm-2"  for="description">Description:</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="description" id="description" placeholder="Describe Your self"></textarea>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2"  for="award">Awards:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="award" id="award" placeholder="Describe Your self">
      </div>
    </div>
	  
	  
	  
	  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default ">Submit</button>
      </div>
    </div>
	</form>
@endsection 
