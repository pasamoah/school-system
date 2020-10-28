


<?php $__env->startSection('content'); ?>

<style type="text/css">
  
#cardb:hover{
  transform: translateY(10px);

}




</style>




<div class="container-fluid" style="background-color: #faf9f7">

<div class="row">
  <div class="column">
    <a href="/student-list" style="text-decoration: none">
    <div class="card" id="cardb">
      <ul style="display: flex; list-style-type: none;">
        <li>
          <img src="<?php echo e(asset('images/graduate.png')); ?>" style="width: 50px; height: 50px; border-radius: 50%">
        </li>
        <li style="margin-left:10px">
          <span class="text-dark" style="font-size: 19px;font-weight: 700"><?php echo e($displaycount); ?></span><br>
          <span class="text-primary">Students</span>
        </li>
      </ul>
    </div>
    </a>
  </div>

  <div class="column">
    <a href="" style="text-decoration: none">
    <div class="card" id="cardb">
      <ul style="display: flex; list-style-type: none;">
        <li>
          <img src="<?php echo e(asset('images/salary.png')); ?>" style="width: 50px; height: 50px;">
        </li>
        <li style="margin-left:10px">
          <span class="text-dark" style="font-size: 19px;font-weight: 700">GH¢ <?php echo e($total_amount); ?></span><br>
          <span class="text-primary">Due Fees</span>
        </li>
      </ul>
    </div>
  </a>
  </div>
  
  <div class="column">
    <a href="/student-list" style="text-decoration: none">
    <div class="card" id="cardb">
      <ul style="display: flex; list-style-type: none;">
        <li>
          <img src="<?php echo e(asset('images/budget.png')); ?>" style="width: 50px; height: 50px;">
        </li>
        <li style="margin-left:10px">
          <span class="text-dark" style="font-size: 19px;font-weight: 700">GH¢ <?php echo e($total_owings); ?></span><br>
          <span class="text-primary">Owings</span>
        </li>
      </ul>
    </div>
  </a>
  </div>

  
  <div class="column">
    <a href="/staff" style="text-decoration: none">
    <div class="card" id="cardb">
      <ul style="display: flex; list-style-type: none;">
        <li>
          <img src="<?php echo e(asset('images/worker.png')); ?>" style="width: 50px; height: 50px; border-radius: 50%">
        </li>
        <li style="margin-left:10px">
          <span class="text-dark" style="font-size: 19px;font-weight: 700"><?php echo e($staffcount); ?></span><br>
          <span class="text-primary">Employees</span>
        </li>
      </ul>
    </div>
  </a>
  </div>

</div>
</div>

<div class="container-fluid">
  <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="chart-title">
                  <h4>Student Total</h4>
                  <span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
                </div>  
                <canvas id="linegraph"></canvas>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="chart-title">
                  <h4>Income And Expenses</h4>
                  <div class="float-right">
                    <ul class="chat-user-total">
                      <li><i class="fa fa-circle current-users" aria-hidden="true"></i>IC</li>
                      <li><i class="fa fa-circle old-users" aria-hidden="true"></i> EXP</li>
                    </ul>
                  </div>
                </div>  
                <canvas id="bargraph"></canvas>
              </div>
            </div>
          </div>
        </div>
</div>



  <div class="container-fluid"  style="margin-bottom: 50px; background-color: #faf9f7;margin-right: 80px">
  <div class="row">
    <div class="col">
      <div style="margin-bottom: 10px; padding: 8px; background-color: #ffffff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2)"><?php echo $__env->make('inc.school_statistics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', App\Event::class)): ?>

        <div style="margin-bottom: 10px; padding: 8px; background-color: #ffffff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2)"><?php echo $__env->make('inc.eventform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>

      <?php endif; ?>

      <div style="margin-top: 15px; padding: 8px; background-color: #ffffff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2)"><?php echo $__env->make('inc.eventlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    </div>


    <div class="col">
      <div style="background-color: #ffffff; padding: 10px">
        <?php echo $__env->make('inc.rightsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

      <?php echo $__env->make('inc.rightside_stafflist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

      <div style="margin-top: 12px" >
        <?php echo $__env->make('inc.expenses-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
  </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/dashboard.blade.php ENDPATH**/ ?>