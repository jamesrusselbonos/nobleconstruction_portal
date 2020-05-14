@extends('admin')

@section('admin_content')

	<div class="row">
		<div class="col-xl-12">
			<table class="mdl-data-table" id="addDataTable">
	          	<thead style="width:100%">
	            	<tr>
	              		<th scope="col">Client Name</th>
	              		<th scope="col">Job Name</th>
	              		<th scope="col">Phone Number</th>
	              		<th scope="col">Cost</th>
	              		<th scope="col">Start Date</th>
	              		<th scope="col">Finish Date</th>
	              		<th scope="col">Location</th>
	              		<th scope="col">Status</th>
	              		<th scope="col"style="max-width: 150px;">Action</th>
	            	</tr>
	          	</thead>
	          	<tbody>
	      	
	      			@foreach($project_overview as $projects_overview)
		            	<tr>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->client_name}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->job_name}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->cline_pnumber}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->cost}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->start_date}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->end_date}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->location}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->status}}
		              		</td>
		             
		             		<td style="max-width: 150px;">
		             			<span style="float: right;">
									<a type="button" id="{{$projects_overview->id}}" class="btn btn-primary btn_p_overview" data-toggle="modal" data-target="#exampleModal"
									p_id = "{{$projects_overview->id}}"
									p_client_id = "{{$projects_overview->client_id}}"
									p_client_name = "{{$projects_overview->client_name}}"
									p_client_email = "{{$projects_overview->client_email}}"
									p_client_pnumber = "{{$projects_overview->cline_pnumber}}"
									p_job_name = "{{$projects_overview->job_name}}"
									p_cost = "{{$projects_overview->cost}}"
									p_desc = "{{$projects_overview->description}}"
									p_start_date = "{{$projects_overview->start_date}}"
									p_end_date = "{{$projects_overview->end_date}}"
									p_location = "{{$projects_overview->location}}"
									p_status = "{{$projects_overview->status}}"

									>
	                            	<i class="fa fa-gear" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Manage</a>
								</span>
		             		</td>
		            	</tr>
	      			@endforeach 
	          	</tbody>
	        </table>
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h6 class="modal-title" id="exampleModalLabel">Project Overview</h6>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      		<div class="modal-body">
	        		<div class="row">
	        			<div class="col-xl-12">
	        				<div class="row">
	        					<div class="col-xl-12"><h3 class="m_job_name"></h3></div>
	        				</div>
	        				<div class="row" style="margin-top: -20px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-user ht_c_name" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="m_client_name ht_c_name"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-envelope ht_c_email" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="m_client_email ht_c_email"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-phone ht_c_pnum" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="m_client_pnumber ht_c_pnum"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-money ht_cost" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;$<p class="m_cost ht_cost"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-calendar ht_start_date" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Start Date -&nbsp;<p class="m_start_date ht_start_date"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-calendar ht_end_date" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Finish Date -&nbsp;<p class="m_end_date ht_end_date"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-map ht_location" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="m_location ht_location"></p>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="col-xl-12">
	        				<p style="font-weight: bold;">Description:</p>
	        				<p  style="margin-top: -15px;" class="m_desc"></p>
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="col-xl-12">
	        				<form method="POST" action="{{route('admin.edit_project')}}">
	        					@csrf
	        					<div class="row form-group">
	        						 <div class="col-xl-12"> 
	        						 	<input name="txt_client_name" type="hidden" class="form-control e_txt_client_name">
	        						 	<input name="txt_client_email" type="hidden" class="form-control e_txt_client_email">
	        						 	<input name="txt_client_pnumber" type="hidden" class="form-control e_txt_client_pnumber">
	        						 	<input name="txt_job_name" type="hidden" class="form-control e_txt_job_name">
	        						 	<input name="txt_cost" type="hidden" class="form-control e_txt_cost">
	        						 	<input name="txt_desc" type="hidden" class="form-control e_txt_desc">
	        						 	<input name="txt_start_date" type="hidden" class="form-control e_txt_start_date">
	        						 	<input name="txt_end_date" type="hidden" class="form-control e_txt_end_date">
	        						 	<input name="txt_location" type="hidden" class="form-control e_txt_location">
	        						 	<input name="txt_id" type="hidden" class="form-control e_txt_id">
	        						 	<input name="txt_client_id" type="hidden" class="form-control e_txt_client_id">
	        						 	<label style="font-weight: bold;" for="exampleInputPassword1">Select project status</label>
			     						<select name="txt_status" class="form-control" class="m_status">
			     							
		     						      	<option value="Pending">Pending</option>
		     						      	<option value="In Progress">In Progress</option>
		     						      	<option value="Finished">Finished</option>
		     						      	<option value="Cancelled">Cancelled</option>
		     						    </select>
	        						 </div>
	        					</div>
	        					<button type="submit" style="float: right; margin-top: 10px;" class="btn btn-primary">Edit Project</button>
	        				</form>
	        			</div>
	        		</div>
	      		</div>
	      		<!-- <div class="modal-footer">
	        		<button type="button" class="btn btn-primary">Edit Project</button>
	      		</div> -->
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

	        $('.btn_p_overview').on('click', function(event){
                
                var v_id = $(this).attr('p_id');
                var v_client_id = $(this).attr('p_client_id');
                var v_client_name = $(this).attr('p_client_name');
                var v_client_email = $(this).attr('p_client_email');
                var v_client_pnumber = $(this).attr('p_client_pnumber');
                var v_job_name = $(this).attr('p_job_name');
                var v_cost = $(this).attr('p_cost');
                var v_desc = $(this).attr('p_desc');
                var v_start_date = $(this).attr('p_start_date');
                var v_end_date = $(this).attr('p_end_date');
                var v_location = $(this).attr('p_location');
                var v_status = $(this).attr('p_status');


                $('.m_client_name').html(v_client_name);
                $('.m_client_email').html(v_client_email);
                $('.m_client_pnumber').html(v_client_pnumber);

                $('.m_job_name').html(v_job_name);
                $('.m_cost').html(v_cost);
                $('.m_desc').html(v_desc);
                $('.m_start_date').html(v_start_date);
                $('.m_end_date').html(v_end_date);
                $('.m_location').html(v_location);
                $('.m_status').val(v_status);

                $('.e_txt_id').val(v_id);
                $('.e_txt_client_id').val(v_client_id);
                $('.e_txt_client_name').val(v_client_name);
                $('.e_txt_client_email').val(v_client_email);
                $('.e_txt_client_pnumber').val(v_client_pnumber);
                $('.e_txt_job_name').val(v_job_name);
                $('.e_txt_cost').val(v_cost);
                $('.e_txt_desc').val(v_desc);
                $('.e_txt_start_date').val(v_start_date);
                $('.e_txt_end_date').val(v_end_date);
                $('.e_txt_location').val(v_location);
                
            });

	    });
	</script>

@endsection