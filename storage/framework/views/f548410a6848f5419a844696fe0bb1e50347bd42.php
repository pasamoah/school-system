


<?php $__env->startSection('content'); ?>


<div class="content">
  <div class="add-more" style="float: right; margin-right: 30px">
      <a href="/student-list" class="btn btn-primary btn-rounded"><i class="fa fa-search-plus"></i> Search Student</a>
</div>


<div style="margin: 15px">
  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-user-o" aria-hidden="true"></i> Admission</a>
  </div>
</nav>
<form method="POST" action="<?php echo e(URL::to('registerstudent')); ?>" enctype="multipart/form-data">
  <?php echo e(csrf_field()); ?>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div style="background-color: #ffffff; border-color: 1px solid #f1f1f1; padding: 25px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)">
      <span style="font-size: 17px; font-weight: 100">Student Infomation</span><hr>
      <?php echo $__env->make('inc.admission_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <div>
      
    <div style="background-color: #ffffff; border-color: 1px solid #f1f1f1; padding: 25px;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2); margin-top: 15px">
      <span style="font-size: 17px;font-weight: 100">Parental / Guardian Information</span><hr>
      
      <?php echo $__env->make('inc.admission_form_parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    </div>
    
  </div>
  </form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/student.blade.php ENDPATH**/ ?>