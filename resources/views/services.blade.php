@extends('admin')

@section('admin_content')

	<div class="row">
		<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
			<table class="mdl-data-table" id="addDataTable">
	          	<thead style="width:100%">
	            	<tr>
	              		<th scope="col" style="max-width: 160px;">Action</th>
	              		<th scope="col" style="max-width: 188px;">Client Name</th>
	              		<th scope="col" style="max-width: 150px;">Job Name</th>
	            	</tr>
	          	</thead>
	          	<tbody>
	      			@foreach($services as $service)
	      				<tr>
	      					<td style="max-width: 160px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"> 
	      						<span>
	      							<a type="button" class="btn btn-primary btn_edit" id="{{ $service->id }}"

	      								se_id = "{{ $service->id }}"
	      								se_service_name = "{{ $service->service_name }}"
	      								se_service_cost = "{{ $service->service_cost }}"

	      							><i class="fa fa-edit"></i>&nbsp;Edit</a>
	      							<a href="/services/{{ $service->id }}" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Delete</a>
	      						</span>
	      					</td>
	      					<td style="max-width: 188px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $service->service_name }}</td>
	      					<td style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $service->service_cost }}</td>
	      				</tr>
	      			@endforeach
	          	</tbody>
	        </table>
		</div>
		<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
			<div class="form_submit">
				<form  method="POST" action="{{route('admin.service.create')}}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-xl-12">
							<h4 style="margin-top: 10px;">Add a service</h4>
						</div>
					</div>
					<div class="row form-group">
					    <div class="col-xl-12">
					    	<label for="exampleInputEmail1">Job Name</label>
					    	<input name="job_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
					    	<!-- <small id="emailHelp" class="form-text text-muted">Please type what project you want us to do.</small> -->
					    </div>
					    <div class="col-xl-12">
					    	<label for="exampleInputPassword1">Cost</label>
					    	<div class="input-group mb-2">
					    	    <div class="input-group-prepend">
					    	        <div class="input-group-text">$</div>
					    	    </div>
					    	    <input name="cost" type="number" class="form-control" id="inlineFormInputGroup" placeholder="0.00" step=".01">
					    	</div>
					    </div>
					</div>
					<span>
						<button style="float: right;" type="submit" class="btn btn-primary">Submit</button>
					</span>
				</form>
			</div>
			<div class="form_edit">
				<form  method="POST" action="{{route('admin.service.edit')}}" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-xl-12">
							<h4 style="margin-top: 10px;">Edit a service</h4>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-xl-12">
					    	
					    	<input name="txt_se_id" type="hidden" class="form-control txt_se_id">
					    	
					    </div>
					    <div class="col-xl-12">
					    	<label for="exampleInputEmail1">Job Name</label>
					    	<input name="txt_se_service_name" type="text" class="form-control txt_se_service_name" id="txt_se_service_name" aria-describedby="emailHelp" placeholder="">
					    	<!-- <small id="emailHelp" class="form-text text-muted">Please type what project you want us to do.</small> -->
					    </div>
					    <div class="col-xl-12">
					    	<label for="exampleInputPassword1">Cost</label>
					    	<div class="input-group mb-2">
					    	    <div class="input-group-prepend">
					    	        <div class="input-group-text">$</div>
					    	    </div>
					    	    <input name="txt_se_cost" type="number" class="form-control txt_se_cost" id="txt_se_cost" placeholder="0.00" step=".01">
					    	</div>
					    </div>
					</div>
					<span>
						<button style="float: right;" type="submit" class="btn btn-primary">Submit</button>
					</span>
				</form>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('#addDataTable').DataTable({
	            "scrollX": true,
	             dom:
	                  "<'row'<'col-sm-6 col-md-6'l><'col-sm-6 col-md-6'f>>" +
	                  "<'row'<'col-sm-12'tr>>" +
	                  "<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>>",
	            columnDefs: [
                   {
                       targets: [ 0, 1, 2 ],
                       className: 'mdl-data-table__cell--non-numeric'
                   }
               ],
	        });

	        $('.btn_edit').on('click', function(event){

	        	$('.form_submit').css('display', 'none');
	        	$('.form_edit').css('display', 'block');

	        	var v_se_id = $(this).attr('se_id');
	        	var v_se_service_name = $(this).attr('se_service_name');
	        	var v_se_cost = $(this).attr('se_service_cost');

                $('.txt_se_id').val(v_se_id);
                $('.txt_se_service_name').val(v_se_service_name);
                $('.txt_se_cost').val(v_se_cost);


	        });
	    });
	</script>

@endsection