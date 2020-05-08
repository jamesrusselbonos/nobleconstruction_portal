@extends('clients.client')

@section('jcontent')

<div class="row">
	<div class="col-xl-10">
		<div id='calendar'></div>
	</div>
	<div class="col-xl-2">
		<h6>Legends</h6>
		<ul class="side_nav_ul">
			<li style="color: #5bc0de;"><i class="fa fa-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Pending</li>
			<li style="color: #5cb85c;"><i class="fa fa-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Finished</li>
			<li style="color: #d9534f;"><i class="fa fa-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Cancelled</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
         $('#calendar').fullCalendar({

        });  
    });
</script>

@endsection