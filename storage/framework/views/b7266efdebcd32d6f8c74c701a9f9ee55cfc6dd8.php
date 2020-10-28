<h3>Enter Payment Details</h3>
<div class="form-group">

 <form method="POST" action="<?php echo e(URL::to('/dashboard/student/pay/new')); ?>">

  <?php echo csrf_field(); ?>
	   
    <div class="form-group">
     <label> Student ID </b></label>
      <input type="text" class="form-control" value="<?php echo $f_payment->std_id; ?>" name="student_id" required readonly="" />
    </div>

      <div class="form-group">
      <label for="Name">Fee Type</label>
      <select name="feeType" class="form-control" style="width: 100%" id="studentfields" required>
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $feesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $settings->setting_fee_type; ?>"><?php echo e($settings->setting_fee_type); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      </div>

      <div class="form-group">
      <label>Current Level</b></label>
      <select name="current_year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $feesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $settings->setting_fee_level; ?>"><?php echo e($settings->setting_fee_level); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>

      <div class="form-group">
      <label>Academic Year</b></label>
      <select name="year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $feesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $settings->setting_fee_academics; ?>"><?php echo e($settings->setting_fee_academics); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      </div>

      <div class="form-group">
      <label>Semester</b></label>
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
      <label>Amount Paid</b></label>
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
      <label>Paid By</b></label>
      <input type="text" name="paid_by" title="Paid by" class="form-control" required>
    </div>

      <button class="btn btn-primary" name="pay">Make Payment&nbsp;&nbsp;<i class="fas fa-dollar-sign"></i></button>

      
</form>


</div>
<?php /**PATH C:\xampp\htdocs\management\school\resources\views/tabs/newfeeform.blade.php ENDPATH**/ ?>