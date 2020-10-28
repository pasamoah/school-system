

<?php $__env->startSection('content'); ?>

<div style="margin-left: 20px; margin-right: 15px; margin-top: 10px">

<?php echo $__env->make('updates.students', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/studentprofileupdate.blade.php ENDPATH**/ ?>