@extends('layout.app')


@section('content')
        <div style="margin:10px">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Leave</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="{{URL::to('/Edit/add-leave')}}" method="POST">
                            <div class="form-group">
                            	@csrf
                                <label>Leave Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="leave_type">
                                    <option>{!!$leaves->leave_type!!}</option>
                                    <option>Casual Leave 12 Days</option>
                                    <option>Medical Leave</option>
                                    <option>Loss of Pay</option>
                                </select>
                            </div>
                            <div class="form-group">
                            	<label>Staff ID <span class="text-danger">*</span></label>
                            	<input type="text" name="leave_staff_id" class="form-control" value="{!!$leaves->leave_staff_id!!}">
                            </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>From <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_from" value="{!!$leaves->leave_from!!}">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>To <span class="text-danger">*</span></label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" name="leave_to" value="{!!$leaves->leave_to!!}">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Number of days <span class="text-danger">*</span></label>
										<input class="form-control" readonly="" type="text" name="leave_number_of_days" value="{!!$leaves->leave_number_of_day!!}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Remaining Leaves <span class="text-danger">*</span></label>
										<input class="form-control" readonly="" value="{!!$date_remain!!}" type="text" name="leave_remaining">
									</div>
								</div>
							</div>
                            <div class="form-group">
                                <label>Leave Reason <span class="text-danger">*</span></label>
                                <textarea name="leave_reason" rows="4" cols="5" class="form-control">{!!$leaves->leave_reason!!}</textarea>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Send Leave Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>


@endsection
