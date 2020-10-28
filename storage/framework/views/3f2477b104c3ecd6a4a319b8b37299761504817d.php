

  <?php $__currentLoopData = $schoolinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="card">
  <img src="/uploads/<?php echo e($profile->image); ?>" alt="/uploads/<?php echo e($profile->image); ?>" style="width:100%; border-radius: 15px ">
  <h2><?php echo e($profile->f_name); ?><small>, <?php echo e($profile->surname); ?></small></h2>
  <p class="title"><?php echo e($profile->Programme); ?>, <?php echo e($profile->c_level); ?>,</p>
  <p><?php echo e($schoolinfo -> school_name); ?></p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><a href="/remove/profile/<?php echo $profile->std_id; ?>" class="btn btn-outline-danger">Remove</a></p>
</div><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/updates/studentsimpleprofile.blade.php ENDPATH**/ ?>