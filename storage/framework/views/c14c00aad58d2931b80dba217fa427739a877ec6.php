

<?php $__env->startSection('content'); ?>
<div class="content">

<div style="width: 50%; margin: 0 auto">

	<div style="font-size: 20px ">
		Send Message to <?php echo $sms->f_name; ?> <?php echo $sms->surname; ?>

	</div><br><br>

	<?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<form action="/student-sms" method="POST">
		<?php echo csrf_field(); ?>
	<div class="form-group">
	<label>Number</label>
	<input type="text" name="number" class="form-control" value="<?php echo $sms->phone; ?>" readonly="">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/sms-to-student.blade.php ENDPATH**/ ?>