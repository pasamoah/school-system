



<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $schoolinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="content">
	<div class="container">
	<div class="row" >
        <div class="col-sm-5 col-4">
            <h4 class="page-title">Payslip</h4>
        </div>
        <div class="col-sm-7 col-8 text-right m-b-30">
            <div class="btn-group btn-group-sm">
                <button class="btn btn-white">CSV</button>
                <button class="btn btn-white">PDF</button>
                <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
            </div>
        </div>
 </div>


<div style="margin-bottom: 120px">
  <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 class="mb-1 page-title">PAYSLIPS</h3>
      <small><?php echo e(\Carbon\Carbon::parse($staff_detail->created_at)->diffForHumans()); ?></small>
    </div>
    <div style="position: absolute;">
    	<img src="/uploads/<?php echo $info->school_logo; ?>" style="width: 50px; height: 70px">
    </div>

    <div style="margin-left: 8%">
    	<?php echo e($info->school_name); ?><br>
    	<?php echo e($info->school_address); ?><br>
    	<?php echo e($info->school_district); ?> | TaX No:<?php echo e($info->school_tax); ?><hr>
    	<h3 class="page-title">Personal Information</h3>
    	<?php echo e($staff_detail -> firstname_staff); ?> <?php echo e($staff_detail -> lastname_staff); ?><br>
    	<span class="text-primary"><?php echo e($staff_detail -> designation_staff); ?></span><br>
    	Employee ID: <?php echo e($staff_detail -> staff_id); ?><br>
		Joining Date: <?php echo e($staff_detail -> joining_date); ?>

    </div>
    
  </div>


  	<div>

  	<?php $__currentLoopData = $staffslip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  	<div class="container">

  <div class="row">
  	<div style="height: 50px;margin-top:
  	 10px;padding: 8px">
  		<small style="font-size: 15px; margin-top: 20px">Month:<br> <?php echo e($slip -> salary_month); ?></small>
  	</div>
  	
    <div class="col" style="margin-top: 10px">
    	<h3>Earnings</h3>
		 <ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Basic Salary
		    <span class="badge  badge-pill">GH¢ <?php echo e($slip -> basic_salary); ?></span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    House Rent Allowance (H.R.A.)
		    <span class="badge  badge-pill">GH¢ <?php echo e($slip -> hra); ?></span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Conveyance
		    <span class="badge  badge-pill">GH¢ <?php echo e($slip -> Conveyance); ?></span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		   	Other Allowance(Allowance, medical, DA, Others)
		    <span class="badge  badge-pill">GH¢ <?php echo (($slip -> allowance)+($slip -> medical_allowance)+($slip -> da)+($slip -> others)); ?></span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		    Total Earnings
		    <span class="badge  badge-pill">GH¢ <?php echo e($slip -> total_earnings); ?></span>
		 </li>
		</ul>
    </div>
     <div class="col" style="margin-top: 10px">
      <h3>Deductions</h3>
		 <ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Tax Deducted at Source (T.D.S.)
		    <span class="badge  badge-pill" >GH¢ <?php echo e($slip -> tds); ?></span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Provident Fund
		    <span class="badge  badge-pill" > GH¢ <?php echo e($slip -> pf); ?></span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    ESI
		    <span class="badge  badge-pill" >GH¢ <?php echo e($slip -> esi); ?></span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		   	other Deduction ( Loans, Leave, Prof. Tax, labour Welfares) 
		    <span class="badge  badge-pill" >GH¢ <?php echo (($slip -> leave)+($slip -> ptax)+($slip -> labour_welfare)+($slip -> n_other)); ?></span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		    Total Deductions
		    <span class="badge  badge-pill" >GH¢ <?php echo e($slip -> total_deductions); ?></span>
		 </li>
		</ul><br>

		<small style="font-size: 18px; font-weight: 700">Net Salary: GH¢ <?php echo e($slip -> net_salary); ?> </small>
    </div>
  </div>

 </div><hr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  	</div>


</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/payslip.blade.php ENDPATH**/ ?>