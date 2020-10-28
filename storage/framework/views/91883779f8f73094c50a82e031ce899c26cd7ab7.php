	<form action="/send-sms" method="POST">
		<?php echo csrf_field(); ?>
		<div class="form-group">
		<label>Phone Number</label>
		<input type="text" name="Phone_number" class="form-control">

		<select multiple="" name="Phone_number" class="form-control">
			<option>+233542401240</option>
			<option>+233202424220</option>
		</select>
	</div>

	<div class="form-group">
		<label>Notification Message</label>
		<textarea class="form-control" rows="10" name="message_sms"></textarea>
		<span class="text-danger"><small>160 characters remaining 1 message</small></span>
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-rounded btn-lg">Send Message</button>
	</div>
	</form><?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/sms-form.blade.php ENDPATH**/ ?>