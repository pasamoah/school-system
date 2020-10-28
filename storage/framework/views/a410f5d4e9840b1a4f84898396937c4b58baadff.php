



<?php $__env->startSection('content'); ?>
  <div class="content">
    <h4 class="page-title">All Courses</h4> 
    <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <table class="table table-striped custom-table mb-0 datatable">
  <thead>
    <tr>
      <th scope="col">Course Code</th>
      <th scope="col">Course Name</th>
      <th scope="col">Academic year</th>
      <th scope="col">Semester</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $display; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo $display->course_code; ?></th>
      <td><?php echo $display->course_name; ?></td>
      <td><?php echo $display->course_academic_year; ?></td>
      <td><?php echo $display->course_semester; ?></td>
      <td><a href="/display/exams/<?php echo $display->course_code; ?>/<?php echo $display->course_semester; ?>/" class="btn btn-primary btn-sm">Questions</a> </td>
      <td>
        <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i>Edit</a>
        <a class="dropdown-item" href="/delete/exams/<?php echo $display->course_code; ?>"><i class="fa fa-trash-o m-r-5"></i>Delete</a>
        <a class="dropdown-item" href="/question/add/<?php echo $display->course_code; ?>"><i class="fa fa-users fa-fw"></i>Add Question</a>
      </div>
    </div>




      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/exams-list.blade.php ENDPATH**/ ?>