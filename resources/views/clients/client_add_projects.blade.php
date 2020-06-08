@extends('clients.client')

@section('jcontent')

<div class="col-xl-12">
	<div class="card2">
		<div class="card-body">
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
					 	<input name="client_address" type="hidden" class="form-control" value="{{ Auth::user()->client_address }}">
					 </div>
					 <div class="col-xl-12"> 
					 	<input name="job_status" type="hidden" class="form-control" value="Pending">
					 </div>
				</div>
				<div class="row form-group">
				    <div class="col-xl-6">
				    	<label for="id_label_single">
				    	  	Service
				    	</label>
				    	<select class="js-example-basic-single form-control" name="job_name">
				    			<option>Select service</option>
				    		@foreach($services as $service)
				    			<option class="select_option" id="{{ $service->id }}" value="{{ $service->service_name }}" ser_cost="{{ $service->service_cost }}">{{ $service->service_name }}</option>
				    		@endforeach
				    	</select>
				    	<!-- <small id="emailHelp" class="form-text text-muted">Please type what project you want us to do.</small> -->
				    </div>
				    <div class="col-xl-6">
				    	<label for="exampleInputPassword1">Cost</label>
				    	<div class="input-group mb-2">
				    	    <div class="input-group-prepend">
				    	        <div class="input-group-text">$</div>
				    	    </div>
				    	    <input name="cost" type="number" class="form-control cost" id="inlineFormInputGroup" placeholder="0.00" step=".01">
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
	</div>
</div>

<script>
	$(document).ready(function() {
	     $('.js-example-basic-single').select2();

	     $('.js-example-basic-single').change(function(event){

	     	var option = $('.select_option:selected', this).attr('ser_cost');

	     	$('.cost').val(option);

	     });
	});
</script>

	
@endsection