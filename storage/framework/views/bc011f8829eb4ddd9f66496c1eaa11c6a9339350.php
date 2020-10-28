<div>

<div class="d-flex justify-content-between" style="padding: 10px;">
  <div style=" font-size: 17px; height: 30px">School Report and Statistics</div>
<div>
<div class="dropdown dropdown-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
        <a class="dropdown-item" href="" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
</div>
</div>
</div>

<div style="font-family: Arial">
<ul class="list-group list-group-flush">
  <?php $__currentLoopData = $gender; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genderCount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li class="list-group-item"><?php echo e($genderCount -> gender); ?> <span style="float: right"><?php echo e($genderCount -> total); ?></span></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classCount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li class="list-group-item">Level/Year: <?php echo e($classCount -> c_level); ?> <span style="float: right"><?php echo e($classCount -> Class_total); ?></span></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</ul>
</div>



</div><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/school_statistics.blade.php ENDPATH**/ ?>