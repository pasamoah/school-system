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

<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col" width="50%">Year Group</th>
      <th scope="col">Male</th>
      <th scope="col">Female</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $__currentLoopData = $genderCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genderCount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <th scope="row"></th>
      <td>a</td>
      <td>b</td>
      <td>c</td>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
  </tbody>
</table>
</div>

</div><?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/school_statistics.blade.php ENDPATH**/ ?>