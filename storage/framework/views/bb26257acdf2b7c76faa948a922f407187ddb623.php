<div class="content" style="margin-bottom: 50px">
  <div class="page-title">Enter Payment Details</div>
<div class="form-group">

 <?php echo e(Form::open(array('url' => 'dashboard/student/pay'))); ?>

     
    <div class="form-group">
     <label> Student ID</label>
      <input type="text" list="staffid" class="form-control" name="student_id" class="form-control" required>
      <datalist id="staffid"> 
      <?php $__currentLoopData = $studentindex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo $index->std_id; ?>"><?php echo e($index->std_id); ?></option> 
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </datalist>
    </div>

      <div class="form-group">
      <label for="Name">Fee Type</label>
      <select name="feeType" class="form-control" style="width: 100%" id="studentfields" required>
        <option value="Fees">Fees</option>
      </select>
      </div>

      <div class="form-group">
      <label>Current Level</label>
      <select name="current_year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $level_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $settings->level_name; ?>"><?php echo e($settings->level_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

      <div class="form-group">
      <label>Academic Year</label>
      <select name="year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $settings->academic_year; ?>"><?php echo $settings->academic_year; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      </div>

      <div class="form-group">
      <label>Semester</label>
      <select class="form-control"  style="width: 100%" id="studentfields" name="semester" required>
        <option value="" disabled selected>Select your option</option>     
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
     </div>

     <div class="form-group">
      <label for="Name">Expected Amount</label>
      <select name="amount_expected" class="form-control" style="width: 100%" id="studentfields">
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $feesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $settings->setting_fee_amount; ?>">GH₵ <?php echo e($settings->setting_fee_amount); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

    <div class="form-group">
      <label>Amount Paid</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">GH₵</span>
        </div>
        <input type="text" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)" required="">
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Paid By</label>
      <input type="text" name="paid_by" title="Paid by" class="form-control" required>
    </div>

      <button class="btn btn-primary" name="pay">Make Payment&nbsp;&nbsp;<i class="fas fa-dollar-sign"></i></button>

      
<?php echo e(Form::close()); ?>



</div>

</div><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/tabs/paymentform.blade.php ENDPATH**/ ?>