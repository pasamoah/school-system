<!DOCTYPE html>
<html>
<head>
	<title>All Results</title>
</head>
<body>
<style type="text/css">

.main-content{
	margin: 0 auto;
	background-color: #ffffff;
	width: 800px;
	height: 300px;
	font-family: candara
}

</style>

<?php $__currentLoopData = $schoolinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="margin-top: 50px";>
	<div style="text-align: center;font-size: 28px; text-transform: uppercase; font-family: impact; color: #2c1e73"><?php echo e($info -> school_name); ?></div>
			<div style="text-align: center">ADDRESS: <?php echo e($info -> school_address); ?> | WEBSITE: <?php echo e($info -> school_email); ?> | EMAIL: <?php echo e($info -> school_email); ?></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	<hr style="height: 5px; border: none; background-color: #2c1e73; width: 70%">

	<div class="main-content">

		<div class="container">
			<div class="row" style="font-size: 16px">		
				<div class="col">
					Name: <b> <?php echo e($resultprofile->f_name); ?> <?php echo e($resultprofile->surname); ?></b><br>
					Index Number: <b> <?php echo e($resultprofile->std_id); ?> </b><br>
					Course: <b> <?php echo e($resultprofile->Programme); ?></b><br>
					Current Year: <b><?php echo e($resultprofile->c_level); ?></b><br>
				</div>
				<div class="col">
					Academic year: <b><?php echo e($academic); ?></b><br>
					Date: <b><?php echo (date("Y-M-d")) ?></b>
				</div>
				
			</div>
		</div>
		

	<div style="margin-top: 30px ">
		<?php echo $__env->make('inc.results', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
		
	</div>

</body>
</html>






	











	

	




<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/resultsdisplay.blade.php ENDPATH**/ ?>