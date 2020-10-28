

            <div class="content" >
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="<?php echo e(URL::to('/add-zoom-class')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input class="form-control" type="text" name="zoom_created_by" value="<?php echo Auth()->user()->name; ?>" hidden="" required="">

							<div class="form-group">
								<label>Title<span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="zoom_title" required="">
							</div>
                            <div class="form-group">
                                <label>Zoom Meeting ID<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="zoom_id" required="">
                            </div>
                            <div class="form-group">
                                <label>Class<span class="text-danger">*</span></label>
                                <select name="zoom_class" class="form-control">
                                    <option value="" disabled selected>Select your option</option>
                                    <?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo $class_list -> class_name; ?>"><?php echo $class_list -> class_name; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date<span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text" name="zoom_date" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Time Slot<span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Start Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker3" name="zoom_start_time" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>End Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker4" name="zoom_end_time" required="">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Remark</label>
                                <textarea cols="30" rows="4" class="form-control" name="zoom_remark"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Send Notification</label>
                                <select class="form-control" name="notify">
                                    <option value="None">None</option>
                                    <option value="meesage">Send Notification</option>
                                </select>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
 <script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>

 <script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
                $('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
     </script><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/zoomclass.blade.php ENDPATH**/ ?>