


<?php $__env->startSection('content'); ?>

  	<div class="content">
       
        <div class="container-fluid">
             <div class="row">
                    <div class="col-lg-8">
                        <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <h4 class="page-title">Academic Year</h4>
                    </div>
                </div>

            <div class="row">
                <div class="col">
                    <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Academic Year</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="content" style="background-color: #ffffff; padding: 15px">
        <form class="btn-submit" id="ajax">
            <div class="form-group">
                <label>Academic Year</label>
                <input type="text" name="academic_year" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Semester/Term</label>
                <input type="text" name="academic_semester" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="academic_description" class="form-control"></textarea>
            </div>
            
         <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group">
                <button class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>

       </div>
          </div>
                </div>
                <div class="col">
                    <div class="table-responsive" id="academic_year_list" style="background-color: #ffffff; padding:15px">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Academic Year</th>
                                                <th>Semesters</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academics): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td width="150"><?php echo $academics->academic_year; ?></td>
                                                <td width="150"><?php echo $academics->academic_semester; ?></td>
                                                <td><?php echo $academics->academic_description; ?></td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="/academic/delete/<?php echo $academics->id; ?>" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                    
                </div>

                
            </div>
        </div>	
    </div>


<script type="text/javascript">

        $("#ajax").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo e(route('postinsert')); ?>",
                dataType: "json",
                data: $('#ajax').serialize(),
                success: function(data){
                    alert("Data Save: " + data);
                    $("#academic_year_list").load(" #academic_year_list");
                    $("#ajax")[0].reset();
                    
                },
                error: function(data){
                    alert(data);
                }
            });
        });



    </script>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/academic-year.blade.php ENDPATH**/ ?>