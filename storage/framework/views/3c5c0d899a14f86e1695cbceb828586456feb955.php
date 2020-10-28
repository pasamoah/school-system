<?php if(session('status')): ?>

<div class="alert alert-primary alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                              <?php echo session('status'); ?>

                                        </div>
                                    </div>
<?php endif; ?>


<?php if(count($errors) > 0): ?>
<?php $__currentLoopData = $errors-> all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-danger alert-dismissible show fade">
	<?php echo e($error); ?>

</div>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/errorfile.blade.php ENDPATH**/ ?>