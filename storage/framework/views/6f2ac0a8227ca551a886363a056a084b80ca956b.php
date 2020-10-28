
	<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

	
	<table class="table" style="width: 800px">

  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Class Mark(30%)</th>
      <th scope="col">Exams Mark  (70%)</th>
      <th scope="col">Total (100%)</th>
      <th scope="col">Remarks</th>
    </tr>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><a href="<?php echo e(URL::to('/update/results/'. $results-> id)); ?>"><?php echo e($results ->subject); ?></a></th>
      <td><?php echo e($results ->class_mark); ?></td>
      <td><?php echo e($results ->exams_mark); ?></td>
      <td><?php echo e($results ->total_mark); ?></td>
      <td><?php echo e($results ->remark); ?></td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<div style="margin-bottom: 50px; float: right;">
<ul class="list-group list-group-flush">
  <li class="list-group-item" style="font-size: 18px"><b>Total Score:</b> <?php echo e($Average_score); ?></li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>

</div>


<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/results.blade.php ENDPATH**/ ?>