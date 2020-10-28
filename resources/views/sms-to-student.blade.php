@extends('layout.app')

@section('content')
<div class="content">

<div style="width: 50%; margin: 0 auto">

	<div style="font-size: 20px ">
		Send Message to {!! $sms->f_name !!} {!! $sms->surname !!}
	</div><br><br>

	@include('inc.errorfile')

	<form action="/student-sms" method="POST">
		@csrf
	<div class="form-group">
	<label>Number</label>
	<input type="text" name="number" class="form-control" value="{!!$sms->phone!!}" readonly="">
	</div>

	<div class="form-group">
	<label>Messages</label>
	<textarea class="form-control" name="message" rows="5"></textarea>
	<small class="text-danger"> * Message should not be more than 255 words </small>
	</div>
	

	<div class="form-group">
	<button class="btn btn-primary btn-lg">Send Message</button>
	</div>
	</form>
</div>
	
</div>
@endsection