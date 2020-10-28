

<ul class="list-group">
  <li class="list-group-item active">Expense (<a href="/dashboard/expenses" style="color: white"><?php echo $counting; ?></a>)</li>
  <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expenses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li class="list-group-item">Expenses Type: <?php echo e($expenses->expense_name); ?> , From: <?php echo e($expenses->expense_purchased_from); ?><br><br>
  	<?php if($expenses->expense_status == "Pending"): ?>
    <span><a href="/edit/expenses/<?php echo $expenses -> id; ?>" class="custom-badge status-orange"><?php echo e($expenses->expense_status); ?></a></span></li>
    <?php else: ?>
    <span><a href="/edit/expenses/<?php echo $expenses -> id; ?>" class="custom-badge status-blue"> <?php echo e($expenses->expense_status); ?></a></span></li>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/expenses-list.blade.php ENDPATH**/ ?>