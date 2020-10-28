	<form action="/allcontacts" method="POST" enctype="multipart/form-data">
		@csrf
	<div class="form-group">
		<label>Sender</label>
		<input type="text" name="source" class="form-control">
	</div>

	<div class="form-group">
		<label>Notification Message</label>
		<textarea class="form-control" rows="10" name="message_sms"></textarea>
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-rounded btn-lg">Send Message</button>
	</div>
	</form>
	