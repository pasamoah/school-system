



<?php $__env->startSection('content'); ?>

<div class="content">
	<div class="container">
	  <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	    <span><h4 class="page-title">Add Assignment</h4></span>
	    <span style="float: right;"><a href="/dashboard/all-assignments" class="btn btn-outline-primary"> All Assignments</a></span><br><br>
	

	<div style="margin:0 auto;">
	<form action="<?php echo e(URL::to('/add-assignment')); ?>" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
		<div class="form-group">
		<label>Course Code</label>
		<input type="text" name="ass_course_code" class="form-control">
	</div>

	<div class="form-group">
		<label>Course Name</label>
		<input type="text" name="ass_course_name" class="form-control">
	</div>

	<div class="form-group">
		<label>Level</label>
		<input type="text" name="ass_course_level" class="form-control">
	</div>

	<div class="form-group">
		<label>Instruction</label>
		<textarea class="form-control" name="ass_instruction"></textarea>
	</div>

	<div class="form-group">
		<label>Upload assignment file</label>
		<input type="file" name="ass_file" class="form-control">
	</div>
	<div>
		<button class="btn btn-primary btn-lg">Add Assignment</button>
	</div>
	</form>
	</div>

</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/dashboard-assignment.blade.php ENDPATH**/ ?>