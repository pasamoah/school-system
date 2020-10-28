<!DOCTYPE html>
<html>
<head>
	<title>All Results</title>
</head>
<body>
<style type="text/css">

.main-content{
	margin: 0 auto;
	background-color: #ffffff;
	width: 800px;
	height: 300px;
	font-family: candara
}

</style>

@foreach( $schoolinfo as $info)
<div style="margin-top: 50px";>
	<div style="text-align: center;font-size: 28px; text-transform: uppercase; font-family: impact; color: #2c1e73">{{$info -> school_name}}</div>
			<div style="text-align: center">ADDRESS: {{$info -> school_address}} | WEBSITE: {{$info -> school_email}} | EMAIL: {{$info -> school_email}}</div>
</div>
@endforeach

	<hr style="height: 5px; border: none; background-color: #2c1e73; width: 70%">

	<div class="main-content">

		<div class="container">
			<div class="row" style="font-size: 16px">		
				<div class="col">
					Name: <b> {{$resultprofile->f_name}} {{$resultprofile->surname}}</b><br>
					Index Number: <b> {{$resultprofile->std_id}} </b><br>
					Course: <b> {{$resultprofile->Programme}}</b><br>
					Current Year: <b>{{$resultprofile->c_level}}</b><br>
				</div>
				<div class="col">
					Academic year: <b>{{$academic}}</b><br>
					Date: <b><?php echo (date("Y-M-d")) ?></b>
				</div>
				
			</div>
		</div>
		

	<div style="margin-top: 30px ">
		@include('inc.results')
	</div>
		
	</div>

</body>
</html>






	











	

	




