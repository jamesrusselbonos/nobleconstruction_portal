@extends('clients.client')

@section('jcontent')

<div class="col-xl-12">
	<form  method="POST" action="{{route('client.add_projects.create')}}" enctype="multipart/form-data">
		@csrf
		<div class="row form-group">
			 <div class="col-xl-12"> 
			 	<input name="client_name" type="hidden" class="form-control" value="{{ Auth::user()->name }}">
			 </div>
			 <div class="col-xl-12"> 
			 	<input name="client_pnumber" type="hidden" class="form-control" value="{{ Auth::user()->phone_number }}">
			 </div>
			 <div class="col-xl-12"> 
			 	<input name="client_email" type="hidden" class="form-control" value="{{ Auth::user()->email }}">
			 </div>
			 <div class="col-xl-12"> 
			 	<input name="client_id" type="hidden" class="form-control" value="{{ Auth::user()->id }}">
			 </div>
			 <div class="col-xl-12"> 
			 	<input name="job_status" type="hidden" class="form-control" value="Pending">
			 </div>
		</div>
		<div class="row form-group">
		    <div class="col-xl-6">
		    	<label for="exampleInputEmail1">Job Name</label>
		    	<input name="job_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
		    	<small id="emailHelp" class="form-text text-muted">Please type what project you want us to do.</small>
		    </div>
		    <div class="col-xl-6">
		    	<label for="exampleInputPassword1">Cost</label>
		    	<div class="input-group mb-2">
		    	    <div class="input-group-prepend">
		    	        <div class="input-group-text">$</div>
		    	    </div>
		    	    <input name="cost" type="number" class="form-control" id="inlineFormInputGroup" placeholder="0.00" step=".01">
		    	</div>
		    </div>
		</div>
		<div class="row form-group">
			 <div class="col-xl-12"> 
			 	<label for="exampleInputPassword1">Description</label>
		     	<textarea name="job_desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			 </div>
		</div>
		
		<div class="row form-group">
		     <div class="col-xl-6">
		     	<label for="exampleInputPassword1">Start Date</label>
		     	<input name="start_date" type="date" class="form-control" id="exampleInputPassword1" placeholder="">
		     </div>
		     <div class="col-xl-6">
		     	<label for="exampleInputPassword1">Finish Date</label>
		     	<input name="end_date" type="date" class="form-control" id="exampleInputPassword1" placeholder="">
		     </div>
		</div>
		<div class="form-group">
		     <label for="exampleInputPassword1">Location</label>
		     <textarea name="job_location" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>

		   <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

	
@endsection