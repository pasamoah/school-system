                        <hr>
                        <div class="card member-panel">
                            <div class="card-header bg-white">
								<h4 class="card-title mb-0">Employees</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="/staff/<?php echo $staff -> staff_id; ?>" title="<?php echo $staff->firstname_staff; ?> <?php echo $staff->lastname_staff; ?>"><img src="/uploads/<?php echo $staff->image; ?>" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis"><?php echo e($staff->firstname_staff); ?> <?php echo e($staff->lastname_staff); ?></span>
                                                <span class="contact-date"><?php echo e($staff->department_staff); ?>, <?php echo e($staff->designation_staff); ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="/staff" class="text-muted">View all Employees</a>
                            </div>
                    <?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/rightside_stafflist.blade.php ENDPATH**/ ?>