<div class="table-responsive" id="classlist">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>#</th>
										<th>Class Name</th>
										<th>Class Numeric</th>
										<th>Section</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $class_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo $class_list->id; ?></td>
										<td><?php echo $class_list->class_name; ?></td>
										<td><?php echo $class_list->class_numeric; ?></td>
										<td><?php echo $class_list->class_section; ?></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="/class/edit-class/<?php echo $class_list->id; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="/class/delete/<?php echo $class_list->id; ?>" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div><?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/create-class-and-ListTable.blade.php ENDPATH**/ ?>