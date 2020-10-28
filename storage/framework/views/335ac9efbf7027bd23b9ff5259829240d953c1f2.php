


<?php $__env->startSection('content'); ?>


<div class="content">
  <h4 class="page-title"><?php echo $course->course_name; ?> Examination Questions for <?php echo $course->course_academic_year; ?>, Semester: <?php echo $course->course_semester; ?> </h4>



<div class="content">
<?php $__currentLoopData = $display; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $display): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="list-group" style=" margin-bottom: 50px">
  <div href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1"><?php echo $display->question_titile; ?></p>
    <fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer[0][answer]" id="gridRadios1" value="option1">
          <label class="form-check-label" for="gridRadios1">
            [A] <?php echo $display->answer_a; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer[0][answer]" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            [B] <?php echo $display->answer_b; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer[0][answer]" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            [C] <?php echo $display->answer_c; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer[0][answer]" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            [D] <?php echo $display->answer_d; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="answer[0][answer]" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
           [E]  <?php echo $display->answer_e; ?>

          </label>
        </div>
      </div>
    </div>
  </fieldset>
    <small class="text-muted">Select The Best Answer</small>

    <div class="form-group" style="margin-top: 12px">
      <a href="/solve/exams/<?php echo $display->id; ?>/<?php echo $course->course_name; ?>" class="btn btn-primary btn-bg">Submit</a>
    </div>
  </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>



  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/all-question-page.blade.php ENDPATH**/ ?>