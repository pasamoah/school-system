

<?php $__env->startSection('content'); ?>



<div class="content">
	<div class="row">
	        <h4 class="page-title">Fees</h4>
	 </div>

    <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main tab -->



<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-list-ul" aria-hidden="true"></i> All Fee List</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Add Fees</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<!-- Accordion -->
  	<div class="accordion" id="accordionExample">
  <div class="card">
    

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

        <form action="<?php echo e(URL::to('/promotion')); ?>" method="post">
    <?php echo csrf_field(); ?>
   <div class="form-row">
    <div class="col-md-4 mb-3">
      <input type="" name="" class="form-control" placeholder="Academic Year">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <input type="" name="" placeholder="level" class="form-control">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">

      <div class="input-group">
        <button class="btn btn-outline-primary btn-block"><i class="fa fa-filter"></i> Filter </button> 
      </div>
    </div>
  </div>
</form>

        <div class="table-responsive" id="feetypetable">
                                    <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fees Type</th>
                                        <th>Fee Type Code</th>
                                        <th>Academic Years</th>
                                        <th>Levels</th>
                                        <th>Description</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $feetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feetype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($feetype->id); ?></td>
                                        <td><?php echo e($feetype->feetype_name); ?></td>
                                        <td><?php echo e($feetype->feetype_code); ?></td>
                                        <td><?php echo e($feetype->feetype_aca_year); ?></td>
                                        <td><?php echo e($feetype->feetype_levels); ?></td>
                                        <td><?php echo e($feetype->feetype_description); ?></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#feetype_modal" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <button class="dropdown-item" id="deleteProduct" data-id="<?php echo $feetype->id; ?>" data-token="<?php echo e(csrf_token()); ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                          </div>
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
          Add New
          
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
        <form class="btn-submit" id="feetype">
          
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="feetype_name" class="form-control" >
          </div>

          <div class="form-group">
            <label>Academic Year</label>
            <select name="feetype_aca_year" class="form-control">
              <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option>
                <?php echo $academics->academic_year; ?>

              </option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="form-group">
            <label>Level</label>
              <select name="levels" class="form-control">
              <?php $__currentLoopData = $level_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option>
                <?php echo $level_list->level_name; ?>

              </option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea name="feetype_description" class="form-control" rows="7"></textarea>
          </div>
          <div id="messagebox" class="text-primary" style="width: 100%; background-color: #ffffff; padding: 10px; margin-bottom: 5px;" >
                  </div>

          <div class="form-group">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <button class="btn btn-primary">Save</button>
          </div>
        </form>
        

      </div>
    </div>
  </div>
  
</div>
  	
  	
  </div>
</div>
</div>







<script type="text/javascript">

    $("#feetype").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo e(route('feetypeinsert')); ?>",
                dataType: "json",
                data: $('#feetype').serialize(),
                success: function(data){
                    document.getElementById('messagebox').innerHTML = 'Fee Created Successfully';
                    $("#feetypetable").load(" #feetypetable");
                    $("#feetype")[0].reset();
                    
                    
                },
                error: function(data){
                    alert(data);
                    console.log(data);
                }
            });
        });



    $("#deleteProduct").click(function(){
        var id = $(this).data("id");
        var token = $(this).data("token");
        $.ajax(
        {
            url: "feetype/delete/"+id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token,
            },
            success: function(data)
            {
                console.log("it Work");
                $("#feetypetable").load(" #feetypetable");
            },
            error: function(data){
                    alert(data);
                  }
        });
    });

</script>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/fee-type.blade.php ENDPATH**/ ?>