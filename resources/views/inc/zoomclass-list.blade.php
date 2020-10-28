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
									@foreach($programmes as $programmes)
									<tr>
										<td>{{ $programmes->id }}</td>
										<td>{{ $programmes->zoom_title }}</td>
										<td>{{ $programmes->zoom_id }}</td>
										<td>{{ $programmes->zoom_class }}</td>
										<td>{{ $programmes->zoom_date }}</td>
										<td>{{ $programmes->zoom_start_time }}</td>
										<td>{{ $programmes->zoom_end_time }}</td>
										<td>{{ $programmes->zoom_created_by }}</td>
										<td>
											@if($programmes->zoom_date == $todays_date)
											<span class="custom-badge status-blue">Zoom Alert</span>

											@elseif($programmes->zoom_date >= $todays_date)
											<span class="custom-badge status-red">Expired</span>

											@else
											<span class="custom-badge status-orange">Upcoming</span>

											@endif

										</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil m-r-5"></i> Edit</button>
													<a class="dropdown-item" href="/live-class/remove/{!! $programmes->id !!}" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>

													<a class="dropdown-item" href="/send-class-notification/{{$programmes->id}}" data-toggle="modal" data-target=""><i class="fa fa-paper-plane-o"></i> Send Notification</a>
												</div>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
                </div>


