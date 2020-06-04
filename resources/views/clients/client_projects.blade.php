@extends('clients.client')

@section('jcontent')

	<div class="row">
		<div class="col-xl-12">
			<table class="mdl-data-table" id="addDataTable">
	          	<thead style="width:100%">
	            	<tr>
	            		<th scope="col"style="max-width: 150px;">Action</th>
	              		<th scope="col">Job Name</th>
	              		<th scope="col">Status</th>
	              		<th scope="col">Start Date</th>
	              		<th scope="col">Finish Date</th>
	              		<th scope="col">Cost</th>
	              		<th scope="col">Description</th>
	              		<th scope="col">Location</th>
	            	</tr>
	          	</thead>
	          	<tbody>
	      	
	      			@foreach($project_overview as $projects_overview)
		            	<tr>

		            		<td scope="row" style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		             			<span style="float: left;">
									<a type="button" id="{{$projects_overview->id}}" class="btn btn-primary btn_p_overview" data-toggle="modal" data-target="#exampleModal"

									p_id = "{{$projects_overview->id}}"
									p_client_name = "{{$projects_overview->client_name}}"
									p_client_email = "{{$projects_overview->client_email}}"
									p_client_pnumber = "{{$projects_overview->cline_pnumber}}"
									p_client_id = "{{$projects_overview->client_id}}"
									p_job_name = "{{$projects_overview->job_name}}"
									p_cost = "{{$projects_overview->cost}}"
									p_desc = "{{$projects_overview->description}}"
									p_start_date = "{{$projects_overview->start_date}}"
									p_end_date = "{{$projects_overview->end_date}}"
									p_location = "{{$projects_overview->location}}"
									p_status = "{{$projects_overview->status}}"

									>
	                            	<i class="fa fa-eye" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>View</a>
								</span>
		             		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->job_name}}
		              		</td>

		              		<td scope="row" style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->status}}
		              		</td>

		              		<td scope="row">
		              		{{$projects_overview->start_date}}
		              		</td>

		              		<td scope="row">
		              		{{$projects_overview->end_date}}
		              		</td>

		              		<td scope="row">
		              		${{$projects_overview->cost}}
		              		</td>
		              
		              		<td style="max-width: 250px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->description}}
		              		</td>

		              		<td scope="row" style="max-width: auto; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
		              		{{$projects_overview->location}}
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
	        		<form method="POST" action="{{route('client.edit_project')}}">
	        			@csrf
	        			<div class="row">
	        				<div class="col-xl-12">
	        					<div class="row">
	        						<div class="col-xl-12">
	        							<div class="alert alert-primary" role="alert">
	        							  Note: Click the text to edit the project
	        							</div>

	        							<input type="hidden" name="m_id" class="m_id">
	        							<input type="hidden" name="m_client_name" class="m_client_name">
	        							<input type="hidden" name="m_client_email" class="m_client_email">
	        							<input type="hidden" name="m_client_pnumber" class="m_client_pnumber">
	        							<input type="hidden" name="m_client_id" class="m_client_id">
	        							<input type="hidden" name="m_status" class="m_status">
	        						</div>
	        					</div>
	        					<div class="row">
	        						<div class="col-xl-12"><input type="text" name="m_job_name" class="m_job_name" style="width: 90%;">&nbsp;<i class="fa fa-edit" aria-hidden="true" id="m_job_name2">&nbsp;Edit</i></div>
	        					</div>
	        					<div class="row" style="margin-top: -20px;">
	        						<div class="col-xl-12">
	        							<i class="fa fa-money ht_cost" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;$<input type="text" name="m_cost" class="m_cost ht_cost">&nbsp;<i class="fa fa-edit" aria-hidden="true" id="ht_cost2">&nbsp;Edit</i>
	        						</div>
	        					</div>
	        					<div class="row" style="margin-top: -15px;">
	        						<div class="col-xl-12">
	        							<i class="fa fa-calendar ht_start_date" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Start Date -&nbsp;<input type="text" name="m_start_date" class="m_start_date ht_start_date">&nbsp;<i class="fa fa-edit" aria-hidden="true" id="ht_start_date2">&nbsp;Edit</i>
	        						</div>
	        					</div>
	        					<div class="row" style="margin-top: -15px;">
	        						<div class="col-xl-12">
	        							<i class="fa fa-calendar ht_end_date" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Finish Date -&nbsp;<input type="text" name="m_end_date" class="m_end_date ht_end_date">&nbsp;<i class="fa fa-edit" aria-hidden="true" id="ht_end_date2">&nbsp;Edit</i>
	        						</div>
	        					</div>
	        					<div class="row" style="margin-top: -15px;">
	        						<div class="col-xl-12">
	        							<i class="fa fa-map ht_location" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<input type="text" name="m_location" class="m_location ht_location" style="width: 85%;">&nbsp;<i class="fa fa-edit" aria-hidden="true" id="ht_location2">&nbsp;Edit</i>
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-xl-12">
	        					<p>Description:</p>
	        					<textarea class="m_desc" name="m_desc" rows="4" style="width: 90%;"></textarea><i class="fa fa-edit" aria-hidden="true" id="m_desc2">&nbsp;Edit</i>
	        				</div>
	        			</div>
	        			<button style="float: right; margin-top: 30px;" type="submit" class="btn btn-primary">Edit Project</button>
	        		</form>
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

	        $('.btn_p_overview').on('click', function(event){
                
                var v_id = $(this).attr('p_id');
                var v_client_name = $(this).attr('p_client_name');
                var v_client_email = $(this).attr('p_client_email');
                var v_client_pnumber = $(this).attr('p_client_pnumber');
                var v_client_id = $(this).attr('p_client_id');
                var v_job_name = $(this).attr('p_job_name');
                var v_cost = $(this).attr('p_cost');
                var v_desc = $(this).attr('p_desc');
                var v_start_date = $(this).attr('p_start_date');
                var v_end_date = $(this).attr('p_end_date');
                var v_location = $(this).attr('p_location');
                var v_status = $(this).attr('p_status');


                $('.m_job_name').val(v_job_name);
                $('.m_cost').val(v_cost);
                $('.m_desc').val(v_desc);
                $('.m_start_date').val(v_start_date);
                $('.m_end_date').val(v_end_date);
                $('.m_location').val(v_location);

                $('.m_id').val(v_id);
                $('.m_client_name').val(v_client_name);
                $('.m_client_email').val(v_client_email);
                $('.m_client_pnumber').val(v_client_pnumber);
                $('.m_client_id').val(v_client_id);
                $('.m_status').val(v_status);
                
            });

            $(".m_cost").hover(
		      	function () {
		        	$("#ht_cost2").show();
		      	},
		        function () {
		          	$("#ht_cost2").hide();
		      	}
		     );

            $(".m_start_date").hover(
		      	function () {
		        	$("#ht_start_date2").show();
		      	},
		        function () {
		          	$("#ht_start_date2").hide();
		      	}
		     );

            $(".m_end_date").hover(
		      	function () {
		        	$("#ht_end_date2").show();
		      	},
		        function () {
		          	$("#ht_end_date2").hide();
		      	}
		     );

            $(".m_location").hover(
		      	function () {
		        	$("#ht_location2").show();
		      	},
		        function () {
		          	$("#ht_location2").hide();
		      	}
		     );

            $(".m_job_name").hover(
		      	function () {
		        	$("#m_job_name2").show();
		      	},
		        function () {
		          	$("#m_job_name2").hide();
		      	}
		     );

            $(".m_desc").hover(
		      	function () {
		        	$("#m_desc2").show();
		      	},
		        function () {
		          	$("#m_desc2").hide();
		      	}
		     );

	    });
	</script>

@endsection