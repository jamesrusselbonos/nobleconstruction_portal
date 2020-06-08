@extends('admin')

@section('admin_content')

	<div class="row">
		 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
		 	<div class="card_pending">
		 		<div class="card-body">
		 			<h3 style="margin-top: -10px;">{{ $project_pending }}</h3>
		 			<p style="margin-top: -20px; margin-bottom: -10px;">Pending Projects</p>
		 		</div>
		 	</div>
		 </div>
		 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
		 	<div class="card_in_progress">
		 		<div class="card-body">
		 			<h3 style="margin-top: -10px;">{{ $project_in_progress }}</h3>
		 			<p style="margin-top: -20px; margin-bottom: -10px;">In-Progress Projects</p>
		 		</div>
		 	</div>
		 </div>
		 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
		 	<div class="card_finished">
		 		<div class="card-body">
		 			<h3 style="margin-top: -10px;">{{ $project_finished }}</h3>
		 			<p style="margin-top: -20px; margin-bottom: -10px;">Finished Projects</p>
		 		</div>
		 	</div>
		 </div>
		 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
		 	<div class="card_cancelled">
		 		<div class="card-body">
		 			<h3 style="margin-top: -10px;">{{ $project_cancelled }}</h3>
		 			<p style="margin-top: -20px; margin-bottom: -10px;">Cancelled Projects</p>
		 		</div>
		 	</div>
		 </div>
	</div>

	<div class="row" style="margin-top: 30px;">
		<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
			<div class="card2">
				<div class="card-header">
					<h5>Projects</h5>
				</div>
				<div class="card-body">
					<div id="myChart" width="400" height="400">
						{!! $chart->container() !!}
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
			<div class="row">
				<div class="col-xl-12">
					<div class="card2">
						<!-- <div class="card-header">
							Latest Customers
						</div> -->
						<div class="card-body">
							<h3 style="margin-top: -10px;">{{ $total_customer }}</h3>
							<p style="margin-top: -20px; margin-bottom: -10px;">Total Customers</p>
						</div>
					</div>
				</div>
				<div style="margin-top: 30px;" class="col-xl-12">
					<div class="card2">
						<div class="card-header">
							<h5>Customer Registered</h5>
						</div>
						<div class="card-body">
							<div id="myChart2" width="200" height="200">
								{!! $chart2->container() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 30px;">
		<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
			<div class="card2">
				<div class="card-header">
					<h5>Latest Customers</h5>
				</div>
				<div class="card-body">
					<div class="row">
						@foreach( $customer as $customers)
							<div class="col-xl-12">
								<h6 style="margin-top: -10px;">{{ $customers->name }}</h6>
								<p style="margin-top: -20px;">{{ $customers->email }}</p>
								<p style="margin-top: -20px;">{{ $customers->phone_number }}</p>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
			<div class="card2">
				<div class="card-header">
					<h5>Calendar</h5>
				</div>
				<div class="card-body">
					<div id='calendar'></div>
				</div>
			</div>
		</div>
	</div>

	{!! $chart->script() !!}

	{!! $chart2->script() !!}

	<script>

	    $(document).ready(function(){
	         
	         $('#calendar').fullCalendar({
	         	plugins: [ 'interaction'],
	         	selectable: true,
	         	selectHelper: true,
	         	height: "auto",
	         	editable: true,
	         	 events : [
	         	 	@foreach($project as $projects)
		                {
		                    title : '{{ $projects->client_name . ', ' . $projects->job_name . ', ' . $projects->location }}',
		                    start : '{{ $projects->start_date }}T00:00:00',
		                    @if ($projects->status == 'In Progress')
		                            color : '#fd7e14',
		                    @elseif ($projects->status == 'Finished')
		                    	color : '#5cb85c',
		                    @elseif ($projects->status == 'Cancelled')
		                    	color : '#d9534f',
		                    @else 
		                    	color : '#5bc0de',
		                    @endif
		                    textColor: 'white',
		                    @if ($projects->end_date)
		                            end: '{{ $projects->end_date }}T24:00:00',
		                    @endif
		                },
		            @endforeach
	         	 ]

	        });  
	    });
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		        datasets: [{
		            label: 'No. of Projects',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [

		                'rgba(195, 147, 49, 0.2)'
		            ],
		            borderColor: [
		                
		                'rgba(195, 147, 49, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero: true
		                }
		            }]
		        }
		    }
		});

	</script>

@endsection