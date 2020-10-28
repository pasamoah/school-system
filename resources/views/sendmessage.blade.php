@extends('layout.app')

@section('content')

<style type="text/css">
		
#messageframe{

	width: 95%;
	background-color: #f7f7f7;
	margin-top: 25px;
	margin-left: 15px;
	border: 1px solid #f1f1f1;
}
</style>

<div style="margin-left: 220px;">

<div class="container" style="margin-top: 20px" id="messageframe">
	<div class="row">
	
	<div class="col-8">
		@include('composemessage.composeform')
	</div>		
	<div class="col-4">
		@include('composemessage.sidebarmessage')
	</div>


	</div>
	
</div>





</div>

@endsection