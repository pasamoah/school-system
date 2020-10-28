<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <title>Adorable E-system</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <?php $__currentLoopData = $schoolinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link rel="shortcut icon" type="image/x-icon" href="/uploads/<?php echo $schoolinfo->school_logo; ?>" style="width: 30px; height: 45px">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap-datetimepicker.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/fullcalendar.min.css')); ?>">
    <meta name="_token" content="<?php echo e(csrf_token()); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/fullcalendar.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/toastr/toastr.min.css')); ?>">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body style="margin-bottom: 80px">
<?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<div style="float: left;">
  	<?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  	</div>

<div class="page-wrapper" id=app>
  <?php echo $__env->yieldContent('content'); ?>

</div>
 


 <script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.fullcalendar.js')); ?>"></script>
</body>


<!-- Footer -->
  <footer class="mastfoot mt-auto" style="background-color: #ffffff;  width: 100%; height: 50px; position: fixed;left: 0; bottom: 0; margin-top: 15px">
    <div style="float: right; margin-right: 20px; text-align: center; padding: 12px">
    <div class="inner">
      <p style="color: #000">© 2019 - <script>document.write(new Date().getFullYear())</script> | <a href="#" style="color: #000"><b> Adorable Systems Incorporation</b> </a>, by <a href="https://twitter.com/adorablegh"><b style="color: #000">@MeetAdorable</b></a>.</p>
    </div>
  </div>
  </footer>
 



</html>
<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/layout/app.blade.php ENDPATH**/ ?>