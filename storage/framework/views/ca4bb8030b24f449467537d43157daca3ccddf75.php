<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>#</th>
										<th>Section Name</th>
										<th>Section Capacity</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $__currentLoopData = $section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo $section_list->id; ?></td>
										<td><?php echo $section_list->section_name; ?></td>
										<td><?php echo $section_list->section_capacity; ?></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="" data-toggle="modal" data-target="#sectionlist_id"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="/section/delete/<?php echo $section_list->id; ?>" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</tbody>
							</table>
						</div>



<!-- update Section -->
<!-- Edit Modal -->
<div class="modal fade" id="sectionlist_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Event Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- Read More Event-->
      
      <div class="container">
      	<form class="btn-submit" id="ajaxsection">
					<?php echo csrf_field(); ?>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="section_name" required="">
				</div>

				<div class="form-group">
					<label>Capacity</label>
					<input type="text" class="form-control" name="section_capacity">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Save Changes</button>
				</div>
				</form>

      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/section-listTable.blade.php ENDPATH**/ ?>