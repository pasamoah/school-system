


<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">

    <div class="row">
      <div class="col-4" style="text-align: center; overflow-y: scroll; height:auto;"> 
        
        <div class="card">
         <div>
           <img src="/uploads/<?php echo e($studentprofilePage->image); ?>" class="img-responsive" alt="<?php echo $studentprofilePage->image; ?>" style="width: 240px; height: 240px; border-radius: 15px">
         </div>
            <div class="card-body">
            <h5 class="card-title" style="text-transform: uppercase; font-weight: 900; font-family: candara"><?php echo e($studentprofilePage->surname); ?> <?php echo e($studentprofilePage->f_name); ?></h5>
            <p class="card-text text-primary" style="text-transform: uppercase;"><?php echo e($studentprofilePage->Programme); ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="/profile/update/<?php echo $studentprofilePage -> std_id; ?>" class="btn btn-dark btn-sm"><i class="fa fa-pencil-square-o"></i> UPDATE</a>
              <a href="/profile/message/<?php echo $studentprofilePage -> std_id; ?>" class="btn btn-primary btn-sm"><i class="fa fa-paper-plane"></i> MESSAGE</a>
            </li>
            <li class="list-group-item">

              Search Academic Record
            </li>
            <li class="list-group-item">
            <form action="<?php echo e(URL::to('/student/resultshow/'. $studentprofilePage->std_id)); ?>" method="GET" enctype="multipart/form-data">
      
             <input type="text" name="studentID" value="<?php echo $studentprofilePage->std_id; ?>" hidden="">
            

            <select name="academic_year">
              <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feesettings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo $feesettings-> academic_year; ?>"><?php echo e($feesettings-> academic_year); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>


             <select name="semester">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>


            <button style="background-color: #ffffff; border: 1.5px solid #f1f1f1">view</button>    
            </form>
            </li>
          </ul>
          <div class="card-body">
            <a href="/dashboard" class="card-link">Back to Home</a>

          </div>
        </div>



      </div>
      <div class="col-8">

    <div style="width: 100%; background-color: #ffffff; padding: 15px;">
      <div class="page-title">
        Student Info
      </div><hr>

      <div class="form-row" style="text-align: justify;">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Full-Name:<span class="text-primary"> <?php echo e($studentprofilePage->f_name); ?> <?php echo e($studentprofilePage->surname); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email: <span class="text-primary"><?php echo e($studentprofilePage->f_email); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Date of Birth: <span class="text-primary"><?php echo e($studentprofilePage->DoB); ?></span></label>
  </div>

      <div class="col-md-4 mb-3">
      <label for="validationCustom01">Address: <span class="text-primary"><?php echo e($studentprofilePage->p_address); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nationality: <span class="text-primary"><?php echo e($studentprofilePage->nationality); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Region: <span class="text-primary"><?php echo e($studentprofilePage->region); ?></span></label>
  </div>


      <div class="col-md-4 mb-3">
      <label for="validationCustom01">Full-Name:<span class="text-primary"> <?php echo e($studentprofilePage->f_name); ?> <?php echo e($studentprofilePage->surname); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email: <span class="text-primary"><?php echo e($studentprofilePage->f_email); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Date of Birth: <span class="text-primary"><?php echo e($studentprofilePage->DoB); ?></span></label>
  </div>

      <div class="col-md-4 mb-3">
      <label for="validationCustom01">Address: <span class="text-primary"><?php echo e($studentprofilePage->p_address); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nationality: <span class="text-primary"><?php echo e($studentprofilePage->nationality); ?></span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Region: <span class="text-primary"><?php echo e($studentprofilePage->region); ?></span></label>
  </div>


    </div><hr>
        
<div style="margin-top: 50px">
  <div class="page-title">
    Fee Transaction
  </div>
    <?php if($studentfeedetails -> isEmpty()): ?>
      <span style="margin-top: 10px">No Payments Made recently <a href="<?php echo e(URL::to('/new/payment' . '/' .  $studentprofilePage->std_id)); ?>"> Make Payment </a></span>
    <?php endif; ?>

    <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div style="font-family: Candara;">

        <form style="margin-bottom: 3px" action="/fee-grouping/<?php echo $studentprofilePage->std_id; ?>" method="GET">
          <label>Filter: </label><br>
          <span>
          <select name="academic_year" style="width: 20%; height: 28px">
          <option>2019 - 2020</option>
          </select>
          <select name="semester" style="width: 20%; height: 28px">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          </select>
          </span>

          <span><button class="btn btn-primary btn-sm">search</button></span>

          <button style="background-color: #ffffff; border: 1.5px solid #f1f1f1">PDF</button>
          <button style="background-color: #ffffff; border: 1.5px solid #f1f1f1"><i class="fa fa-print fa-lg"></i> Print</button>

          <a href="<?php echo e(URL::to('/new/payment' . '/' .  $studentprofilePage->std_id)); ?>" style="float: right;" class="btn btn-success btn-sm"><i class="fa fa-money"></i>  Add payment</a>
        </form>

        

        <div class="list-group">
          <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Payment Transactions</h5>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
          </div>

          <?php $__currentLoopData = $studentfeedetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feeDetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Academic Year: <?php echo e($feeDetails->year); ?> | Date: <?php echo e($feeDetails->created_at); ?> | Expected Fee: GHS <?php echo e($feeDetails->amount_expected); ?></h5>
              <small class="text-muted"></small>
            </div>
            <p class="mb-1">
              <table class="table table-borderless">
              <tbody>
                <tr>
                  <th scope="row">
                    Fee Type:<br>
                    Narative:<br>
                    Paid by:<br>
                    Amount:<br>
                    Balance:

                  </th>
                  <td>
                    <?php echo e($feeDetails->fee_type); ?><br>
                    Being Payment of <?php echo e($feeDetails->fee_type); ?> for <b><?php echo e($feeDetails->year); ?></b> academic year, semester <br>
                    <?php echo e($feeDetails -> paid_by); ?><br>
                    GHs <?php echo e($feeDetails -> amount); ?><br>
                    <h6 style="color: blue">GHs <?php echo e($feeDetails -> balance); ?></h6>

                  </td>
                </tr>
              </tbody>
            </table>
            </p>
            <small class="text-muted"><a href="<?php echo e(URL::to('/editpayment/' . $feeDetails -> id .'/'. $feeDetails->student_id)); ?>">Edit Payment</a> |

              <?php if( $feeDetails -> status == "Full Payment"  ): ?>

                <label style="color: #2049a8"><?php echo e($feeDetails -> status); ?></label>

                <?php endif; ?>

                <?php if( $feeDetails -> status == "Owing"  ): ?>

                <label style="color: #b50415"><?php echo e($feeDetails -> status); ?></label>

                <?php endif; ?>

                <?php if( $feeDetails -> status == "Overpaid"  ): ?>

                <label style="color: #069941"><?php echo e($feeDetails -> status); ?></label>

                <?php endif; ?> | <a href="<?php echo e(URL::to('/editpayment/print/' . $feeDetails -> id .'/'. $feeDetails->student_id)); ?>"> Print Receipt </a> | <a href="/delete/payment/<?php echo $feeDetails->id; ?>"> Delete Transaction </a>

            </small>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    
    </div>
    </div>
</div>

      
    </div>
  </div>

  </div>
  
<?php $__env->stopSection(); ?>












<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/studentprofile.blade.php ENDPATH**/ ?>