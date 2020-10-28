        




<?php $__env->startSection('content'); ?>
<div class="content" style="margin-bottom: 20px">

  <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="row">
                    <div class="col-sm-8 col-5">
                        <h4 class="page-title">Students</h4>
                    </div>
                    <div class="col-sm-4 col-7 text-right m-b-30">
                        <a href="/dashboard/new-student" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Student</a>
                    </div>
                </div>

  <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Student ID</label>
                            <input type="text" class="form-control floating" id="myInput" onkeyup="myFunction()">
                        </div>
                    </div>
                    

                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                      <form style="margin-bottom: 12px" action="<?php echo e(URL::to('/filter/class')); ?>" method="GET">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Current  Year</label>
                            <select class="form-control" name="class">
                                <option disabled selected> -- Select -- </option>
                                <?php $__currentLoopData = $feesettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feesettings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($feesettings -> setting_fee_level); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Programme</label>
                            <select class="form-control" name="programme">
                                <option disabled selected> -- Select -- </option>
                                <?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo $class_list -> class_name; ?>"><?php echo $class_list -> class_name; ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Status</label>
                            <select class="form-control" name="std_status">
                                <option disabled selected> -- Select -- </option>
                                <option>Alumini</option>
                                <option>Withdrawn</option>
                                <option>Suspended</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <button class="btn btn-outline-primary btn-block"><i class="fa fa-filter"></i> Filter </button> 
                    </div>
                     </form>
                </div>
              </div>

              <div class="container-fluid">
                <form method="post" action="<?php echo e(URL::to('/multiplerecordsdelete')); ?>">
                  <?php echo csrf_field(); ?>
                <table id="tableData" class="table table-striped custom-table mb-0 datatable table-sm">
                  <thead>
                  <th><input type="checkbox" id="master"></th>
                  <th>Student</th>
                  <th>Student ID</th>
                  <th>Email</th>
                  <th>Date of Birth</th>
                  <th>Programme</th>
                  <th>Contact No#</th>
                  <th>Action</th>
                </thead>
                <tbody>
                   <?php $__currentLoopData = $listing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>
                    <input type="checkbox" id="checkItem" name="checked[]" value="<?php echo $std->std_id; ?>">
                  </td>
                    <td style="min-width: 200px;">
                    <a class="avatar" href="/users/<?php echo $std->std_id; ?>"><img src="/uploads/<?php echo e($std->image); ?>" style=" border-radius: 50%;" alt="<?php echo e($std->image); ?>"></a>
                    <h2><a href="/users/<?php echo $std->std_id; ?>"><?php echo e($std->f_name); ?> <?php echo e($std->surname); ?></a><span><?php echo e($std->c_level); ?></span></h2> 
                  </td>
                  <td><?php echo e($std->std_id); ?></td>
                  <td><a href="mailto:<?php echo $std->f_email; ?>"> <?php echo e($std->f_email); ?> </a></td>
                  <td><i class="fa fa-calendar-check-o"></i> <?php echo e($std->DoB); ?></td>
                  <td><?php echo e($std->Programme); ?></td>
                  <td><?php echo e($std->phone); ?></td>
                    <td class="text-right">
                    <div class="dropdown dropdown-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo e(URL::to('/profile/update/') . '/' . $std->std_id); ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="/student/trash/<?php echo $std -> std_id; ?>" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i>Trash</a>
                        </div>
                    </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
              <div class="form-group" style="margin-top: 10px; margin-bottom:70px">
                <button class="btn btn-danger">Delete All</button>
              </div>
              </form>

              </div>
</div>
</div>





<script type="text/javascript">


  function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}



  $("#master").click(function (){
    $('input:checkbox').not(this).prop('checked', this.checked)
  });

</script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/student-list.blade.php ENDPATH**/ ?>