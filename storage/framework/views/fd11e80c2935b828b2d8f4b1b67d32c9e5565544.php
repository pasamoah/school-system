				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>sl</th>
										<th>Title</th>
										<th>Meeting ID</th>
										<th>Class</th>
										<th>Date</th>
										<th>Start Time</th>
										<th>End Time</th>
										<th>Created By</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $programmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $programmes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($programmes->id); ?></td>
										<td><?php echo e($programmes->zoom_title); ?></td>
										<td><?php echo e($programmes->zoom_id); ?></td>
										<td><?php echo e($programmes->zoom_class); ?></td>
										<td><?php echo e($programmes->zoom_date); ?></td>
										<td><?php echo e($programmes->zoom_start_time); ?></td>
										<td><?php echo e($programmes->zoom_end_time); ?></td>
										<td><?php echo e($programmes->zoom_created_by); ?></td>
										<td>
											<?php if($programmes->zoom_date == $todays_date): ?>
											<span class="custom-badge status-blue">Zoom Alert</span>

											<?php elseif($programmes->zoom_date >= $todays_date): ?>
											<span class="custom-badge status-red">Expired</span>

											<?php else: ?>
											<span class="custom-badge status-orange">Upcoming</span>

											<?php endif; ?>

										</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil m-r-5"></i> Edit</button>
													<a class="dropdown-item" href="/live-class/remove/<?php echo $programmes->id; ?>" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>

													<a class="dropdown-item" href="/send-class-notification/<?php echo e($programmes->id); ?>" data-toggle="modal" data-target=""><i class="fa fa-paper-plane-o"></i> Send Notification</a>
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


<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/zoomclass-list.blade.php ENDPATH**/ ?>