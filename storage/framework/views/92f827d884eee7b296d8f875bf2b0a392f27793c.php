

<?php $__env->startSection('content'); ?>

<div class="content" style="margin-bottom: 100px">
	<div class="row">
    <div class="col">
        <span class="page-title">Class Control</span>
        <span style="float: right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Create Level/Current Year
      </button></span>
    </div>
	</div>
  <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Modal -->
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

<!-- Main tab Nav -->
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-graduation-cap"></i> Class</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-arrows-alt"></i> Create Section</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  	
  	<?php echo $__env->make('inc.create-class-and-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	<?php echo $__env->make('inc.section-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>

</div>


<script type="text/javascript">
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/section-classes.blade.php ENDPATH**/ ?>