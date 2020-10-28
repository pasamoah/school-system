


<?php $__env->startSection('content'); ?>

<style type="text/css">
	#homedesign{
		background-color: #ffffffs;
		width: 100%;
		height: 500px;
		background-image: url("images/illustration-2.png");
		background-repeat: no-repeat;
		background-size: 900px 550px;
	}
</style>

<div id="homedesign">

	<div class="container">
		<div class="row">
			<div class="col-8"></div>
			<div class="col-4">
				<?php echo $__env->make('inc.homepagedesign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			</div>
			
		</div>
		
	</div>
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/welcome.blade.php ENDPATH**/ ?>