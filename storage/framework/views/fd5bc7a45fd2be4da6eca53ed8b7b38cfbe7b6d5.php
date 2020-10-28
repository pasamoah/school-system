        




<?php $__env->startSection('content'); ?>

<div class="content">
  <div class="page-title">
    Promote Students
  </div>

  <div style="min-height: 200px; background-color: #ffffff; padding: 30px; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2)">
    <div style="font-size: 17px; margin-bottom: 5px;">
      Select Grounds
    </div><hr>
    <form method="GET" action="<?php echo e(URL::to('/promotion/filter')); ?>">
    <?php echo csrf_field(); ?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="validationCustom01">Class</label>
      <select class="form-control" name="course">
        <?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option><?php echo $list->class_name; ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <div class="valid-feedback" >
        Looks good!
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="validationCustom02">Section</label>
       <select class="form-control" name="section">
        <?php $__currentLoopData = $section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option><?php echo $list->section_name; ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div>
      <button class="btn btn-outline-primary btn-lg"> <i class="fa fa-filter"></i> Filter</button>
    </div>
  </div>
  
  
</form>

  </div>


                          <div class="table-responsive" style="margin-top: 30px; background-color: #ffffff; padding: 30px;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2) ">

                            <div style="font-size: 17px; margin-bottom: 5px;">
                              The Next Session Was Transferred To The Students
                            </div><hr>

                            <div style="border: 1px solid #f1f1f1; border-radius: 5px;padding: 12px; margin-bottom: 5px">
                              Instructions :
                              <ul style="list-style-type: none;">
                              <li>1. The Roll field shows the previous roll and you can manually add new roll for promoted session</li>
                              <li>2. Roll number is unique, so carefully enter the roll number. Automatically generate a roll when your entered roll exists</li>
                              <li>3. For Enroll, You can select "Running Class" and "Promote To Class" same (Student will change in Session year but classes remain unchanged)</li>
                              <li>4. Please double check and Fill-up all fields carefully Then click Promotion button</li>
                             </ul>
                            </div>

                  <div>
                    <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>


<div style="margin-top: 12px">
  <form action="<?php echo e(URL::to('/promotion')); ?>" method="post">
    <?php echo csrf_field(); ?>
   <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Promotion To Level<span class="text-danger">*</span></label>
      <select name="class_level" class="form-control" id="validationCustom01" required>
        <?php $__currentLoopData = $level_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $level_list -> level_name; ?>"><?php echo $level_list -> level_name; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Promote To Class/Programme<span class="text-danger">*</span></label>
      <select class="form-control" name="class_programe" id="inputEmail4">
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $class_list -> class_name; ?>"><?php echo $class_list -> class_name; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Promote To Section<span class="text-danger">*</span></label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
      </div>
    </div>
  </div>

                            <table class="table table-striped custom-table mb-0 datatable" style="margin-top: 10px">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Student Number</th>
                                        <th>Guardian Name</th>
                                        <th>Mark Summary</th>
                                        <th>Fee Category</th>
                                        <th class="text-right"><input type="checkbox" name="" id="master"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="profile.html" class="avatar"><img src="/uploads/<?php echo e($filter->image); ?>" style=" border-radius: 50%;" alt="<?php echo e($filter->image); ?>"></a>
                                            <h2><a href="#"><?php echo e($filter->f_name); ?> <?php echo e($filter->surname); ?><span><?php echo e($filter->Programme); ?></span></a></h2>
                                        </td>
                                        <td><?php echo e($filter->std_id); ?></td>
                                        <td><?php echo e($filter->title); ?> <?php echo e($filter->g_fname); ?> <?php echo e($filter->g_surName); ?></td>
                                        <td><a href="/users/<?php echo $filter->std_id; ?>" class="btn btn-outline-primary btn-sm btn-rounded"><i class="fa fa-eye"></i> View</a></td>
                                        <td><?php echo e($filter->fee_category); ?></td>
                                        <td class="text-right">
                                            <input type="checkbox" id="checkItem" name="checked[]" value="<?php echo $filter->std_id; ?>">
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                            <div>
                              <button class="btn btn-outline-primary btn-lg">Promotion</button>
                            </div>
                            </form>
                        </div>
    
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



  $("#master").click(function (){
    $('input:checkbox').not(this).prop('checked', this.checked)
  });

</script>
  
</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/student-promotion.blade.php ENDPATH**/ ?>