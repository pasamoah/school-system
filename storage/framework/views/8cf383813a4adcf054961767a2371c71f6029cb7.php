



<?php $__env->startSection('content'); ?>

<div class="content">
              <?php if($assignment->isEmpty()): ?>
                <div>No Assignment Created, <a href="/dashboard/assignment">Add New</a></div>
                <?php else: ?>
                <div class="row">
                    <div class="col-sm-12">
                        <span><h4 class="page-title">Assignment</h4></span>
                        <span style="float: right; margin-bottom: 12px "><button class="btn btn-primary btn-rounded">
                          Add New
                        </button>
                      </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="activity">
                            <div class="activity-box">
                                <ul class="activity-list">
                                  <?php $__currentLoopData = $assignment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="activity-user">
                                            <a href="/uploads/<?php echo $assign->ass_file; ?>" title="Download" data-toggle="tooltip" class="avatar">
                                                D
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="#" class="name">Course code</a>| 
                                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                                <?php echo $assign->ass_course_code; ?> - <a href="#"><?php echo $assign->ass_course_name; ?></a>
                                                <span class="time"><?php echo e($assign -> created_at->diffForHumans()); ?> | <a href="/assignment/edit/<?php echo $assign->id; ?>"> <i class="fa fa-pencil m-r-5"></i> Edit</a> </span>
                                            </div>
                                        </div>
                    <a class="activity-delete" href="/delete/assignment/<?php echo $assign->id; ?>" title="Delete">&times;</a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/all-assignments.blade.php ENDPATH**/ ?>