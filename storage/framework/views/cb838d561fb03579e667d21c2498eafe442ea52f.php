 
                    <div class="col-sm-7 col-8">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white">PDF</button>
                            <button class="btn btn-white" onclick="window.print()"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                    </div> 

                    <div class="row" style="background-color: #ffffff; padding: 10px">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Leave Type</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>No of Days</th>
                                        <th>Reason</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leaves): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                          <?php echo e($leaves->id); ?>  
                                        </td>
                                        <td><?php echo e($leaves->leave_type); ?></td>
                                        <td><?php echo e($leaves->leave_from); ?></td>
                                        <td><?php echo e($leaves->leave_to); ?></td>
                                        <td><?php echo e($leaves->leave_number_of_day); ?></td>
                                        <td><?php echo substr($leaves->leave_reason,0,30); ?>..</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <?php echo $leaves->leave_status; ?>

                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/approve/new/<?php echo $leaves->id; ?>">New</a>
                                                    <a class="dropdown-item" href="/approve/pending/<?php echo $leaves->id; ?>">Pending</a>
                                                    <a class="dropdown-item" href="/approve/approved/<?php echo $leaves->id; ?>">Approved</a>
                                                    <a class="dropdown-item" href="/approve/declined/<?php echo $leaves->id; ?>">Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/Edit/add-leave/<?php echo $leaves->id; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/staff-individual-leave.blade.php ENDPATH**/ ?>