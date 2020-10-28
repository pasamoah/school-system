


<?php $__env->startSection('content'); ?>



<div class="content">
	<div class="row">
	    <div class="col-sm-5 col-5">
	        <h4 class="page-title">Compose SMS</h4>
	    </div>
	    <div class="col-sm-7 col-7 text-right m-b-30">
	        <a href="/dashboard/sent-message" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> SMS Sent</a>
	    </div>
	</div>
  <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main tab -->



<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send SMS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-address-card-o" aria-hidden="true"></i> Import Contact SMS</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Student BroadCast</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<!-- Accordion -->
  	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          SMS
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div>
          <span class="text-primary"><small>Send a simple SMS to a particular Number</small></span>
        </div>
        <?php echo $__env->make('inc.sms-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
    </div>
  </div>
  
</div>
  	
  </div>

<!-- Tab for Bulk -->
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Bulk SMS
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <span class="text-primary"><small>Send Bulk SMS to Imported Number</small></span>
        <?php echo $__env->make('inc.sms-form-bulk', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
    </div>
  </div>
  
</div>
  	
  	
  </div>
<!-- Tab for INstructions -->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

    <?php echo $__env->make('inc.sms-form-tostudents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  	
  </div>
	


</div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/compose-sms.blade.php ENDPATH**/ ?>