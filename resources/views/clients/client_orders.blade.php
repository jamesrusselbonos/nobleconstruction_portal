@extends('clients.client')

@section('jcontent')

	<div class="row">
		<div class="col-xl-12">
			<div class="card2">
				<div class="card-body">
					<table class="mdl-data-table" id="addDataTable">
			          	<thead style="width:100%">
			            	<tr>
			              		<th scope="col">Name</th>
			              		<th scope="col">Job Name</th>
			              		<th scope="col">Cost</th>
			              		<th scope="col">Email</th>
			              		<th scope="col">Phone Number</th>
			              		<th scope="col">Address</th>
			            	</tr>
			          	</thead>
			          	<tbody>
			      	
			      			@foreach($order_overview as $orders_overview)
				            	<tr>

				            		<!-- <td scope="row" style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
				             			<span style="float: left;">
											<a type="button" id="{{$orders_overview->id}}" class="btn btn-primary btn_o_overview" data-toggle="modal" data-target="#exampleModal"

											o_id = "{{$orders_overview->id}}"
											o_client_name = "{{$orders_overview->client_name}}"
											o_client_email = "{{$orders_overview->client_email}}"
											o_client_pnumber = "{{$orders_overview->client_pnumber}}"
											o_client_id = "{{$orders_overview->client_id}}"
											o_job_name = "{{$orders_overview->client_address}}"
											o_cost = "{{$orders_overview->job_name}}"
											o_desc = "{{$orders_overview->cost}}"

											>
			                            	<i class="fa fa-eye" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>View</a>
										</span>
				             		</td> -->

				              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
				              		{{$orders_overview->client_name}}
				              		</td>

				              		<td scope="row">
				              		{{$orders_overview->job_name}}
				              		</td>
				              
				              		<td style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
				              		${{$orders_overview->cost}}
				              		</td>

				              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
				              		{{$orders_overview->client_email}}
				              		</td>

				              		<td scope="row">
				              		{{$orders_overview->client_pnumber}}
				              		</td>

				              		<td scope="row">
				              		{{$orders_overview->client_address}}
				              		</td>
				            	</tr>
			      			@endforeach 
			          	</tbody>
			        </table>
				</div>
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
	    });
	</script>

@endsection