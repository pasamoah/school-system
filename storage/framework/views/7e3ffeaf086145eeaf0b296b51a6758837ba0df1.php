


<?php $__env->startSection('content'); ?>

<div style="margin-left: 220px">


<div class="container">

	<div style="font-family: candara; font-size: 18px; font-weight: 800"> Update <?php echo e($update->subject); ?> Score for <?php echo e($update->academic_year); ?> Academic year</div>

	<div class="row">
		<div class="col">
			<?php echo $__env->make('inc.formerror', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<form method="POST" action = "/updateresults/<?php echo $update->id; ?>">

				<?php echo csrf_field(); ?>
			  <div class="form-group">
			    <label for="formGroupExampleInput">Student ID</label>
			    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID" name="student_results_id" value="<?php echo $update-> student_results_id; ?>" readonly="">
			  </div>

			  <div class="form-group">
			    <label for="">Subject</label>
			    <input type="text" class="form-control" id="" placeholder="Subject" name="subject" value="<?php echo $update-> subject; ?>">
			  </div>

			  <div class="form-group">
			    <label for="">Class Score</label>
			    <input type="text" class="form-control" id="" placeholder=" Out of 30%" name="class_mark" value="<?php echo $update-> class_mark; ?>">
			  </div>

			  <div class="form-group">
			    <label for="">Exams Score</label>
			    <input type="text" class="form-control" id="" placeholder=" Out of 70%" name="exams_mark" value="<?php echo $update-> exams_mark; ?>">
			  </div>



			  <div class="form-group">
			    <label for="" hidden="">Remarks</label>
			    <input type="text" class="form-control" id="" placeholder="Good, Excellent, etc" name="remark" hidden="">
			  </div>


			    <input type="text" class="form-control" id="" value="<?php echo $update-> academic_year; ?>" hidden="" name="academic_year">

			    <input type="text" class="form-control" id="" value="<?php echo Auth()->user()->name; ?>" hidden="" name="teacher_name">


			  <div class="form-group">
			    <button class="btn btn-success btn-lg">Update Score</button>

			    <a href="<?php echo e(URL::to('/deleteResults/'. $update-> id)); ?>"  class="btn btn-danger btn btn-lg" data-toggle="tooltip" data-placement="bottom" title="by clicking on Delete Mark, you will erase current score for <?php echo $update->subject; ?>">
  				Delete Score
				</a>
			   </div>

			    
			    

			</form>
			
		</div>


		<div class="col">
			

		</div>
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/resultsedit.blade.php ENDPATH**/ ?>