	<form action="/allcontacts" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
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
	<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/sms-form-tostudents.blade.php ENDPATH**/ ?>