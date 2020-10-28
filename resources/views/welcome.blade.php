
@extends('layouts.app')

@section('content')

<style type="text/css">
	#homedesign{
		background-color: #ffffffs;
		width: 100%;
		height: 500px;
		background-image: url("images/illustration-2.png");
		background-repeat: no-repeat;
		background-size: 900px 550px;
	}
</style>

<div id="homedesign">

	<div class="container">
		<div class="row">
			<div class="col-8"></div>
			<div class="col-4">
				@include('inc.homepagedesign')

			</div>
			
		</div>
		
	</div>
	
</div>

@endsection