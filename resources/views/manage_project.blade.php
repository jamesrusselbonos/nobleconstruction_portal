@extends('admin')

@section('admin_content')

	<div class="row">
		<div class="col-xl-12">
			<div class="card2">
				<div class="card-body">
					<table class="mdl-data-table" id="addDataTable">
			          	<thead style="width:100%">
			            	<tr>
			              		<th scope="col">Action</th>
			              		<th scope="col">Client Name</th>
			              		<th scope="col">Job Name</th>
			              		<th scope="col">Status</th>
			              		<th scope="col">Phone Number</th>
			              		<th scope="col">Cost</th>
			              		<th scope="col">Start Date</th>
			              		<th scope="col">Finish Date</th>
			              		<th scope="col">Location</th>
			              		<!-- <th scope="col"style="max-width: 150px;">Action</th> -->
			            	</tr>
			          	</thead>
			          	<tbody>
			      	
			      			
			          	</tbody>
			        </table>
				</div>
			</div>
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

	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h6 class="modal-title" id="exampleModalLabel">Create Invoice</h6>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      		<div class="modal-body">
	        		<div class="row">
	        			<div class="col-xl-12">
	        				<div class="row">
	        					<div class="col-xl-12"><h3 class="im_job_name"></h3></div>
	        				</div>
	        				<div class="row" style="margin-top: -20px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-user ht_c_name" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="im_client_name ht_c_name"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-envelope ht_c_email" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="im_client_email ht_c_email"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-phone ht_c_pnum" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="im_client_pnumber ht_c_pnum"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-money ht_cost" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;$<p class="im_cost ht_cost"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-calendar ht_start_date" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Start Date -&nbsp;<p class="im_start_date ht_start_date"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-calendar ht_end_date" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Finish Date -&nbsp;<p class="im_end_date ht_end_date"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<i class="fa fa-map ht_location" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<p class="im_location ht_location"></p>
	        					</div>
	        				</div>
	        				<div class="row" style="margin-top: -15px;">
	        					<div class="col-xl-12">
	        						<p style="font-weight: bold;">Status:</p>
	        						<p style="margin-top: -15px;" class="im_status"></p>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        		<div class="row">
	        			<div class="col-xl-12">
	        				<p style="font-weight: bold;">Description:</p>
	        				<p style="margin-top: -15px;" class="im_desc"></p>
	        			</div>
	        		</div>
	        		
	        		<div class="row">
	        			<div class="col-xl-12">
	        				<form method="POST" action="{{route('admin.edit_project')}}">
	        					@csrf
	        					<div class="row form-group">
	        						 <div class="col-xl-12"> 
	        						 	<input name="itxt_client_name" type="hidden" class="form-control ie_txt_client_name">
	        						 	<input name="itxt_client_email" type="hidden" class="form-control ie_txt_client_email">
	        						 	<input name="itxt_client_pnumber" type="hidden" class="form-control ie_txt_client_pnumber">
	        						 	<input name="itxt_job_name" type="hidden" class="form-control ie_txt_job_name">
	        						 	<input name="itxt_cost" type="hidden" class="form-control ie_txt_cost">
	        						 	<input name="itxt_desc" type="hidden" class="form-control ie_txt_desc">
	        						 	<input name="itxt_start_date" type="hidden" class="form-control ie_txt_start_date">
	        						 	<input name="itxt_end_date" type="hidden" class="form-control ie_txt_end_date">
	        						 	<input name="itxt_location" type="hidden" class="form-control ie_txt_location">
	        						 	<input name="itxt_id" type="hidden" class="form-control ie_txt_id">
	        						 	<input name="itxt_client_id" type="hidden" class="form-control ie_txt_client_id">

	        						 	<input name="itxt_status" type="hidden" class="form-control ie_txt_status">
	        						 </div>
	        					</div>
	        					<button type="submit" style="float: right; margin-top: 10px;" class="btn btn-primary">Send Invoice</button>
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
			var table = $('#addDataTable').DataTable({
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
                "serverSide": true,
                "ajax": "/ajaxshowcprojects",
                "columns": [
                    { "data": "action", orderable: false, searchable: false },
                    { "data": "client_name" },
                    { "data": "job_name" },
                    { "data": "status" },
                    { "data": "cline_pnumber" },
                    { data: "cost",
                      render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
                    },
                    { "data": "start_date" },
                    { "data": "end_date" },
                    { "data": "location" }
                ]
	        });

	         setInterval( function () {
			    table.ajax.reload();
			}, 1000 );
			
			$.fn.dataTable.ext.errMode = function ( settings, helpPage, message ) { 
                console.log(message);
            };

	        $('#addDataTable').on('click', '.btn_p_overview', function(event){
                
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

			$('#addDataTable').on('click', '.btn_invoice', function(event){
                
                 var iv_id = $(this).attr('i_id');
                 var iv_client_id = $(this).attr('i_client_id');
                 var iv_client_name = $(this).attr('i_client_name');
                 var iv_client_email = $(this).attr('i_client_email');
                 var iv_client_pnumber = $(this).attr('i_client_pnumber');
                 var iv_job_name = $(this).attr('i_job_name');
                 var iv_cost = $(this).attr('i_cost');
                 var iv_desc = $(this).attr('i_desc');
                 var iv_start_date = $(this).attr('i_start_date');
                 var iv_end_date = $(this).attr('i_end_date');
                 var iv_location = $(this).attr('i_location');
                 var iv_status = $(this).attr('i_status');


                 $('.im_client_name').html(iv_client_name);
                 $('.im_client_email').html(iv_client_email);
                 $('.im_client_pnumber').html(iv_client_pnumber);

                 $('.im_job_name').html(iv_job_name);
                 $('.im_cost').html(iv_cost);
                 $('.im_desc').html(iv_desc);
                 $('.im_start_date').html(iv_start_date);
                 $('.im_end_date').html(iv_end_date);
                 $('.im_location').html(iv_location);
                 $('.im_status').html(iv_status);

                 $('.ie_txt_id').val(iv_id);
                 $('.ie_txt_client_id').val(iv_client_id);
                 $('.ie_txt_client_name').val(iv_client_name);
                 $('.ie_txt_client_email').val(iv_client_email);
                 $('.ie_txt_client_pnumber').val(iv_client_pnumber);
                 $('.ie_txt_job_name').val(iv_job_name);
                 $('.ie_txt_cost').val(iv_cost);
                 $('.ie_txt_desc').val(iv_desc);
                 $('.ie_txt_start_date').val(iv_start_date);
                 $('.ie_txt_end_date').val(iv_end_date);
                 $('.ie_txt_location').val(iv_location);
                 $('.ie_txt_status').val(iv_status);
                
             });	        

	    });
	</script>

@endsection