<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Department</h4>
                        <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action = "/edit-depart/<?php echo $department_edit->id; ?>" method = "post">
                            <?php echo csrf_field(); ?>
							<div class="form-group">
								<label>Department Name</label>
								<input class="form-control" type="text" value="<?php echo $department_edit-> department_name; ?>" name="department_name">
							</div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="department_description"><?php echo e($department_edit-> department_description); ?></textarea>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save Department</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/edit-department.blade.php ENDPATH**/ ?>