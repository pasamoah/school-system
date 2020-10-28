


<?php $__env->startSection('content'); ?>
<div class="content">

  <div class="page-title">
    Edit Student Profile
  </div><hr>
    <div class="container-fluid">
      <div>
        <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
    <div class="row">
  <div class="col-8">

     <form method="POST" action="/profile/<?php echo $profile->std_id; ?>" enctype="multipart/form-data">

     <?php echo e(csrf_field()); ?>


      <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Student ID<span class="text-danger">*</span></label>
      <input type="" class="form-control" name="studentID" value="<?php echo $profile ->std_id; ?>" readonly="">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Promote To Class/Programme<span class="text-danger">*</span></label>
      <select class="form-control" name="Programme" id="inputEmail4">
        <option selected="<?php echo $profile ->Programme; ?>"><?php echo e($profile -> Programme); ?></option>
        <?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option><?php echo e($list->class_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Current Year/Level<span class="text-danger">*</span></label>
      <div class="input-group">
        <select class="form-control" name="cLevel">
        <option value="<?php echo $profile -> c_level; ?>"  selected><?php echo e($profile -> c_level); ?></option>
        
        <option>Level 100</option>

      </select>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Profile Photo<span class="text-danger">*</span></label>
      <input type="file" class="form-control" name="image" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

    

      <span>Student Personal Information</span><hr>
      <div class="form-row">

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Surname/Other Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="surName" placeholder=" Other Name" value="<?php echo $profile ->surname; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Frist Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="fName" placeholder=" First Name" value="<?php echo $profile ->f_name; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Date of Birth<span class="text-danger">*</span></label>
          <div class="cal-icon">
          <input type="text" class="form-control datetimepicker" name="DoB" placeholder="Date of Birth" value="<?php echo $profile ->DoB; ?>">
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Email<span class="text-danger">*</span></label>
          <input type="email" class="form-control" placeholder="Email" name="fEmail" value="<?php echo $profile ->f_email; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Password<span class="text-danger">*</span></label>
          <input type="password" class="form-control" name="nationality" placeholder="nationality" value="<?php echo $profile ->nationality; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Confirm Password<span class="text-danger">*</span></label>
          <input type="password" class="form-control" name="" placeholder="Nationality" value="<?php echo $profile ->nationality; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Nationality<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="nationality" placeholder="Nationality" value="<?php echo $profile ->nationality; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

           <div class="col-md-4 mb-3">
          <label for="validationCustom01">Address<span class="text-danger">*</span></label>
          <input type="text" class="form-control" placeholder="Address" name="pAddress" value="<?php echo $profile ->p_address; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Region<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="region" placeholder="Region" value="<?php echo $profile ->region; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Home Town<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="homeTown" placeholder="Home Towm" value="<?php echo $profile ->home_town; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Phone<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="phone" placeholder="Phone Number" value="<?php echo $profile ->phone; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Mobile<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="mobile" value="<?php echo $profile ->mobile; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

                    <div class="col-md-4 mb-3">
          <label for="validationCustom01">Previous School<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="pSchool" placeholder="Previous School" value="<?php echo $profile ->p_school; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Location of School<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="pLocation" placeholder="Location" value="<?php echo $profile ->p_location; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


           <div class="col-md-4 mb-3">
          <label for="validationCustom01">Disability<span class="text-danger">*</span></label>
          <select class="form-control" name="disability" required>
            <option value="<?php echo $profile -> disability; ?>" selected><?php echo e($profile -> disability); ?></option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Gender<span class="text-danger">*</span></label>
          <select  class="form-control" name="gender" required>
          <option value="<?php echo $profile -> gender; ?>" selected><?php echo e($profile -> gender); ?></option>
          <option>Male</option>
          <option>Female</option>
          <option>Others</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Fee Category<span class="text-danger">*</span></label>
          <select  class="form-control" name="feeCat" required>
            <option value="<?php echo $profile -> fee_category; ?>" selected><?php echo e($profile -> fee_category); ?></option>
            <option>Regular</option>
            <option>Fee-Paying</option>
            <option>Parallel</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Current status<span class="text-danger">*</span></label>
          <select class="form-control" name="std_status" required>
          <option value="<?php echo $profile -> std_status; ?>" selected><?php echo e($profile -> std_status); ?></option>

          <option>Alumini</option>
          <option>Withdrawn</option>
          <option>Suspended</option>
          <option>None</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


           <div class="col-md-4 mb-3">
          <label for="validationCustom01">Section<span class="text-danger">*</span></label>
            <select  class="form-control" name="section" required>
            <option value="<?php echo $profile -> section; ?>" selected><?php echo e($profile -> section); ?></option>
            <?php $__currentLoopData = $section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option><?php echo e($section->section_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

        </div>


        
        <span>Parental / Guardian Information</span><hr>
        <div class="form-row">
          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Title<span class="text-danger">*</span></label>
            <select name="title" class="form-control" required>
            <option value="<?php echo $profile -> title; ?>" selected><?php echo e($profile -> title); ?></option>
              <option>Mr.</option>
              <option>Mrs.</option>
              <option>Miss.</option>
              <option>Others</option>
            </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Surname<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="gSurName" placeholder="Surname" value="<?php echo $profile ->g_surName; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">First Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="gFName" placeholder="First Name" value="<?php echo $profile ->g_fname; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Occupation<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="occupation" placeholder="Occupation" value="<?php echo $profile ->occupation; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

        </div>

      
      <span>Contact Information (Parent/Guardian)</span><hr>
      <div class="form-row">

        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Postal Address<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="gpAddress" placeholder="Postal Address" value="<?php echo $profile ->gp_address; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Postal Region<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="pRegion" placeholder="Postal Region" value="<?php echo $profile ->p_region; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Phone Number<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="gmobile" placeholder="Phone Number" value="<?php echo $profile ->g_mobile; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Email<span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="gmail" placeholder="Email" value="<?php echo $profile ->g_mail; ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>
      </div>

      <div class="form-group">
            <button class="btn btn-primary btn-lg">Save</button>
       </div>

    </form>

  </div>

  <div class="col-4">

    <?php echo $__env->make('updates.studentsimpleprofile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>
  </div>
    
  </div>

  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/updates/students.blade.php ENDPATH**/ ?>