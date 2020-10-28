



<?php $__env->startSection('content'); ?>

<style type="text/css">
  .flex{
    display: flex;
    margin-top: 100px;
  }
</style>

<div class="content">

<div>
  <span class="page-title">Fee collection</span>
  <span style="float: right; margin-right: 100px"><a href="/payments/payment-list" class="btn btn-success btn-lg">Payment List</a></span>

  <span style="float: right; margin-right: 20px"><a href="/payments/expenses" class="btn btn-primary btn-lg">Add Expenses</a></span>
</div>


<div class="flex">
    <div class="col">
      <?php echo $__env->make('tabs.paymentlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col">
      <?php echo $__env->make('tabs.paymentform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/payments.blade.php ENDPATH**/ ?>