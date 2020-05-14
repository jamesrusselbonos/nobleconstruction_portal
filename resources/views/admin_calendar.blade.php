@extends('admin')

@section('admin_content')

	<div class="row">
		<div class="col-xl-10">
			<div id='calendar'></div>
		</div>
		<div class="col-xl-2">
			<h6>Legends</h6>
			<ul class="side_nav_ul">
				<li style="color: #5bc0de;"><i class="fa fa-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Pending</li>
				<li style="color: #fd7e14 ;"><i class="fa fa-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>In Progress</li>
				<li style="color: #5cb85c;"><i class="fa fa-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Finished</li>
				<li style="color: #d9534f;"><i class="fa fa-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Cancelled</li>
			</ul>
		</div>
	</div>

	<script type="text/javascript">
	    $(document).ready(function(){
	         $('#calendar').fullCalendar({
	         	plugins: [ 'interaction'],
	         	selectable: true,
	         	selectHelper: true,
	         	editable: true,
	         	 events : [
	         	 	@foreach($project_calendar as $projects_calendar)
		                {
		                    title : '{{ $projects_calendar->client_name . ', ' . $projects_calendar->job_name . ', ' . $projects_calendar->location }}',
		                    start : '{{ $projects_calendar->start_date }}T00:00:00',
		                    @if ($projects_calendar->status == 'In Progress')
		                            color : '#fd7e14',
		                    @elseif ($projects_calendar->status == 'Finished')
		                    	color : '#5cb85c',
		                    @elseif ($projects_calendar->status == 'Cancelled')
		                    	color : '#d9534f',
		                    @else 
		                    	color : '#5bc0de',
		                    @endif
		                    textColor: 'white',
		                    @if ($projects_calendar->end_date)
		                            end: '{{ $projects_calendar->end_date }}T24:00:00',
		                    @endif
		                },
		            @endforeach
	         	 ]

	        });  
	    });
	</script>

@endsection