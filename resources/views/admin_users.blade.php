@extends('admin')

@section('admin_content')

	<div class="row">
		<div class="col-xl-12">
			<div class="card2">
				<div class="card-body">
					<table class="mdl-data-table" id="addDataTable">
			          	<thead style="width:100%">
			            	<tr>
			            		<th scope="col" style="min-width: 100px;">Action</th>
			              		<th scope="col" style="min-width: 150px;">Name</th>
			              		<th scope="col" style="min-width: 150px;">Email</th>
			              		<th scope="col" style="min-width: 100px;">Phone Number</th>
			              		<th scope="col" style="min-width: 200px;">Address</th>
			              		
			            	</tr>
			          	</thead>
			          	<tbody>

			          	</tbody>
			        </table>
				</div>
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
                "ajax": "{{ route('admin.ajaxshowcustomers') }}",
                "columns": [
                	{ "data": "action", orderable: false, searchable: false },
                    { "data": "name" },
                    { "data": "email" },
                    { "data": "phone_number" },
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