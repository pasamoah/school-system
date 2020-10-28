



<?php $__env->startSection('content'); ?>

<style type="text/css">
  .flex{
    display: flex;
    margin-top: 100px;
  }
</style>

<div style="margin-left: 30px; margin-bottom: 100px; margin-top: 20px">
	
<div style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%">
    <div>
      <?php echo $__env->make('tabs.newfeeform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/newfeepayment.blade.php ENDPATH**/ ?>