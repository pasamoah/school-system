



<?php $__env->startSection('content'); ?>

<div class="content">
	<div class="">
	  <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	    <span><h4 class="page-title">Add Assignment</h4></span>
	    <span style="float: right;"><a href="/dashboard/all-assignments" class="btn btn-outline-primary"> All Assignments</a></span>
	</div>

	

	<div style="margin:0 auto; width: 50%">
	<form action="/edit/add-assignment/<?php echo $assignment->id; ?>" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
		<div class="form-group">
		<label>Course Code</label>
		<input type="text" name="ass_course_code" class="form-control" value="<?php echo $assignment->ass_course_code; ?>">
	</div>

	<div class="form-group">
		<label>Course Name</label>
		<input type="text" name="ass_course_name" class="form-control" value="<?php echo $assignment->ass_course_name; ?>">
	</div>

	<div class="form-group">
		<label>Level</label>
		<input type="text" name="ass_course_level" class="form-control" value="<?php echo $assignment->ass_course_level; ?>">
	</div>

	<div class="form-group">
		<label>Upload assignment file</label>
		<input type="file" name="ass_file" class="form-control">
	</div>
	<div>
		<button class="btn btn-primary btn-lg">Save Changes</button>
	</div>
	</form>
	</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/dashboard-edit-assignment.blade.php ENDPATH**/ ?>