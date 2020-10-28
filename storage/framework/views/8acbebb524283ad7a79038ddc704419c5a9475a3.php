
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.3.92/css/materialdesignicons.min.css">
    <link href="<?php echo e(asset('css/tower-file-input.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('js/tower-file-input.js')); ?>"></script>

<div class="container-fluid">


<form method="POST" action="<?php echo e(URL::to('registerstudent')); ?>" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>

<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Programme</label>
      <select class="form-control" name="Programme" id="inputEmail4" required="">
        <option value="" disabled selected>Select your option</option>
        <?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $class_list -> class_name; ?>"><?php echo $class_list -> class_name; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Reference Number</label>
      <input type="number" class="form-control" placeholder="Reference Number"  required name="reference" value="<?php echo $ref_number; ?>">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Current Year/ Level</label>
      <?php if($level_list -> isEmpty()): ?>
      <label data-toggle="modal" data-target="#exampleModal" class="text-primary">Create Level</label><?php endif; ?>
      <select class="form-control" name="cLevel" id="inputEmail4">
        <option value="" disabled selected>Select your option</option>  
        <?php $__currentLoopData = $level_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo $level_list -> level_name; ?>"><?php echo e($level_list -> level_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <div class="valid-tooltip">
        Looks good!
      </div>

    </div>

        <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Set Password</label>
      <input type="password" name="password" class="form-control" id="validationTooltip01" placeholder="Password"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Confirm Password</label>
      <input type="password" name="password_confirmation" class="form-control" id="validationTooltip02" placeholder="Password confirmation" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Avator</label>
          <div class="tower-file">
            <input type="file" id="demoInput5" name="image" multiple />
            <label for="demoInput5" class="btn btn-primary">
                <span class="mdi mdi-upload"></span>Select Files
            </label>
            <button type="button" class="tower-file-clear btn btn-secondary align-top">Clear</button>
         </div>
           <div id="demo-code-5" class="collapse">
                <pre><code>&lt;div class=&quot;tower-file&quot;&gt;
          &lt;input type=&quot;file&quot; id=&quot;demoInput5&quot; /&gt;
          &lt;label for=&quot;demoInput5&quot; <span class="highlight">class=&quot;btn btn-primary&quot;</span>&gt;
              &lt;span class=&quot;mdi mdi-upload&quot;&gt;&lt;/span&gt;Select Files
          &lt;/label&gt;
          &lt;button type=&quot;button&quot; <span class="highlight">class=&quot;tower-file-clear btn btn-secondary</span> align-top&quot;&gt;
              Clear
          &lt;/button&gt;
          &lt;/div&gt;
          </code>
          <code>$('#demoInput5').fileInput({
              iconClass: 'mdi mdi-fw mdi-upload'
          });</code></pre>
          </div>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>

     <div class="col-md-4 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" name="fName" class="form-control" id="validationTooltip01" placeholder="First name" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" name="surName" class="form-control" id="validationTooltip02" placeholder="Last name"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="email" name="fEmail" class="form-control" id="validationTooltipUsername" placeholder="Email Address" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid Email.
        </div>
      </div>
  </div>

       <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Date of Birth</label>
      <div class="cal-icon">
      <input type="text" name="DoB" placeholder="Date  of Birth" class="form-control datetimepicker" id="validationTooltip01"  required>
   </div>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Permanent Address</label>
      <input type="text" name="pAddress" placeholder="Permanent Address" class="form-control" id="validationTooltip02"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Nationality</label>
      <input type="text" name="nationality" placeholder="Nationality" class="form-control" id="validationTooltip02"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
  </div>

  <!-- after Nationality -->

       <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Home Region</label>
      <input type="text" name="region" placeholder="Home Region" class="form-control" id="validationTooltip01"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Home Town</label>
      <input name="homeTown" placeholder="Home Town" class="form-control" id="validationTooltip02"   required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Phone Number</label>
      <div class="input-group">
        <input type="number" name="phone" placeholder="Phone Number" class="form-control" id="validationTooltipUsername"  aria-describedby="validationTooltipUsernamePrepend" required>
      </div>
  </div>

   <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Mobile Number</label>
      <input type="number" name="mobile" placeholder="Mobile" class="form-control" id="validationTooltip01"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Previous School</label>
      <input type="text" name="pSchool" placeholder="Previous School" class="form-control" id="validationTooltip02"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Location of School</label>
      <input type="text" name="pLocation" placeholder="Location" class="form-control" id="validationTooltip02"  required>
      <div class="valid-tooltip">
        Looks good!
      </div>
  </div>

  <div class="form-group col-md-6">
      <label for="inputEmail4">Disability</label>
      <select class="form-control" id="inputEmail4" name="disability" required>
        <option value="" disabled selected>Disabilty</option>
        <option>No</option>
        <option>Yes</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Gender</label>
      <select class="form-control" id="inputEmail4" name="gender" required>
        <option value="" disabled selected>Specify Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Fee Category</label>
      <select class="form-control" id="inputEmail4" name="feeCat" required>
        <option value="" disabled selected>Fee Category</option>
        <option>Regular</option>
        <option>Fee-Paying</option>
        <option>Parallel</option>
      </select>
    </div>


    <div class="form-group col-md-6">
      <label for="inputEmail4">Religion</label>
      <select class="form-control" id="inputEmail4" name="religion" required>
        <option value="" disabled selected>Religion</option>
        <option>Christianity</option>
        <option>Judahism</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4" hidden="">Status</label>
      <select class="form-control" id="inputEmail4" name="std_status" required hidden="">
        <option>None</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Section</label>
      <select class="form-control" id="inputEmail4" name="section" required>
        <?php $__currentLoopData = $section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option><?php echo $section->section_name; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
    </div>
</div>

    <div>
      <span style="font-size: 17px;font-weight: 100">Parental / Guardian Information</span><hr>
      
      <!-- parent Tabs -->

      <div class="form-row" style="margin-bottom: 10px">
    <div class="col-md-4 mb-3">
<label for="validationTooltip01">Title</label>
      <select class="form-control" name="title" required>
        <option value="" disabled selected>Title</option>
        <option>Mr.</option>
        <option>Mrs.</option>
        <option>Miss.</option>
        <option>Others</option>
      </select>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Guardian Surname</label>
      <input type="text" class="form-control" id="validationTooltip02" name="gSurName" placeholder="Surname" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Guardian First Name</label>
      <input type="text" class="form-control" id="validationTooltip02" name="gFName" placeholder="Other Name" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Occupation</label>
      <input type="text" class="form-control" id="validationTooltip02" name="occupation" placeholder="Occupation" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Postal Address</label>
      <input type="text" class="form-control" id="validationTooltip02" name="gpAddress" placeholder="Postal Address" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Postal Region</label>
      <input type="text" class="form-control" id="validationTooltip02" name="pRegion" placeholder="Postal Region" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>


        <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Contact Number</label>
      <input type="text" class="form-control" id="validationTooltip02" name="gmobile" placeholder="Mobile Nummber" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Email</label>
      <input type="email" class="form-control" id="validationTooltip02" name="gmail" placeholder="email" required="">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>

  <div class="form-group" style="margin-bottom: 20px">
      <button type="submit" class="btn btn-primary submit-btn">Add Student</button>
  </div>

  </div>




</form>






<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <form id="levelform" class="btn-submit">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label>Level/Year</label>
              <input type="text" class="form-control" name="Level_name" required="" placeholder="Level 100 or Year 1 or 100">
            </div>

            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" rows="6" name="level_description"></textarea>
            </div>
            <hr>

            <div class="form-group">
              <button class="btn btn-primary">Save</button>
            </div>

            
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>




<script type="text/javascript">
            $('#demoInput5').fileInput({
            iconClass: 'mdi mdi-fw mdi-upload'
        });


  $("#levelform").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo e(route('insertlevel')); ?>",
                dataType: "json",
                data: $('#levelform').serialize(),
                success: function(data){
                    alert("Data Save: " + data);
                    $("#sectionlist").load(" #sectionlist");
                    $("#levelform ")[0].reset();
                    
                },
                error: function(data){
                    alert(data);
                }
            });
        });
</script>
<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/admission_form.blade.php ENDPATH**/ ?>