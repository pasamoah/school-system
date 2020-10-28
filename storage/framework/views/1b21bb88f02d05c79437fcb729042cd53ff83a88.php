



<?php $__env->startSection('content'); ?>
  <div class="content">

    <span style="font-size: 18px">Edit Course</span>
    <span style="float: right;"><a href="/question/add/<?php echo $course->course_code; ?>" class="btn btn-primary btn-sm">Set Questions</a></span>
    <hr>
    <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <form method="post" action="<?php echo e(URL::to('/add-update' . '/' . $course->course_code)); ?>">
    <?php echo csrf_field(); ?>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Coures Name" name="course_name" value="<?php echo $course->course_name; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Course Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Course Code" name="course_code" value="<?php echo $course->course_code; ?>">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Master</label>
    <div class="col-sm-10">
      <input type="text" value="<?php echo $course->course_lecturer; ?>" class="form-control" id="inputEmail3" placeholder="Course Master" name="course_lecturer">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Academic Year</label>
    <div class="col-sm-10">
      <select class="form-control" name="course_academic_year">
        <option value="<?php echo $course->course_academic_year; ?>"><?php echo e($course->course_academic_year); ?></option>
        <?php $__currentLoopData = $feesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $settings->setting_fee_academics; ?>"><?php echo e($settings->setting_fee_academics); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Semester" name="course_semester" value="<?php echo $course->course_semester; ?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Register Course</button>
    </div>
  </div>
</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/edit-exams.blade.php ENDPATH**/ ?>