



<?php $__env->startSection('content'); ?>
<div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <h3 class="page-title">Salary Settings</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>DA (%)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>HRA (%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <h3 class="page-sub-title">Provident Fund Settings</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Employee Share (%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Organization Share (%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <h3 class="page-sub-title">ESI Settings</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Employee Share (%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Organization Share (%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-sm-12 text-center m-t-20">
									<button type="button" class="btn btn-primary submit-btn">Save</button>
								</div>
							</div>
                        </form>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/salary-setting.blade.php ENDPATH**/ ?>