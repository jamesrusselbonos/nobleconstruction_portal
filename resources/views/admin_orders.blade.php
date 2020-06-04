@extends('admin')

@section('admin_content')

	<div class="row">
		<div class="col-xl-12">
			<table class="mdl-data-table" id="addDataTable">
	          	<thead style="width:100%">
	            	<tr>
	              		
	              		<th scope="col">Client Name</th>
	              		<th scope="col">Job Name</th>
	              		<th scope="col">Cost</th>
	              		<th scope="col">Email</th>
	              		<th scope="col">Phone Number</th>
	              		<th scope="col">Address</th>
	            	</tr>
	          	</thead>
	          	<tbody>
	      	
	      			
	          	</tbody>
	        </table>
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
                "ajax": "/ajaxshoworders",
                "columns": [
                    
                    { "data": "client_name" },
                    { "data": "job_name" },
                    { data: "cost",
                      render: $.fn.dataTable.render.number( ',', '.', 2, '$' )
                    },
                    { "data": "client_email" },
                    { "data": "client_pnumber" },
                    { "data": "client_address" }
                    
                ]
	        });

	         setInterval( function () {
			    table.ajax.reload();
			}, 1000 );
			
			$.fn.dataTable.ext.errMode = function ( settings, helpPage, message ) { 
                console.log(message);
            };        

	    });
	</script>

@endsection