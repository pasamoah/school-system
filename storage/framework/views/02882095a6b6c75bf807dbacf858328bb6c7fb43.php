


<?php $__env->startSection('content'); ?>


<div class="content">
  <div class="page-title" style="margin-bottom: 35px">New Student
      <span style="float: right;"><a href="/student-list" class="btn btn-primary btn-rounded"><i class="fa fa-search-plus"></i> Search Student</a></span>
  </div>

<?php echo $__env->make('inc.admission_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/student.blade.php ENDPATH**/ ?>