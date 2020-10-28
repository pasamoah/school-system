@extends('layout.app')



@section('content')

        <div style="margin:15px ">
            <div class="content">
                <div class="row">
                    <div class="col-sm-8 col-6">
                        <h4 class="page-title">Leave Request</h4>
                    </div>
                    <div class="col-sm-4 col-6 text-right m-b-30">
                        <a href="/dashboard/new-leave" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Leave</a>
                    </div>
                </div>

                @include('inc.errorfile')

                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Leave Type</label>
                            <select class="form-control">
                                <option> -- Select -- </option>
                                <option>Casual Leave</option>
                                <option>Medical Leave</option>
                                <option>Loss of Pay</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Leave Status</label>
                            <select class="form-control">
                                <option> -- Select -- </option>
                                <option> Pending </option>
                                <option> Approved </option>
                                <option> Rejected </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">From</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>Employee</th>
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
                                    @foreach($leaves as $leaves)
                                    <tr>
                                        <td>
                                    <a class="avatar" href="/staff/{!! $leaves -> staff_id !!}"><img alt="" src="/uploads/{{$leaves->image}}">
                                    </a>
                                            <h2><a href="#">{{$leaves->firstname_staff}} {{$leaves-> lastname_staff}} <span>{{$leaves-> designation_staff}}</span></a></h2>
                                        </td>
                                        <td>{{$leaves->leave_type}}</td>
                                        <td>{{$leaves->leave_from}}</td>
                                        <td>{{$leaves->leave_to}}</td>
                                        <td>{{$leaves->leave_number_of_day}}</td>
                                        <td>{!!substr($leaves->leave_reason,0,10)!!}..</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    {!!$leaves->leave_status!!}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/approve/new/{!!$leaves->id!!}">New</a>
                                                    <a class="dropdown-item" href="/approve/pending/{!!$leaves->id!!}">Pending</a>
                                                    <a class="dropdown-item" href="/approve/approved/{!!$leaves->id!!}">Approved</a>
                                                    <a class="dropdown-item" href="/approve/declined/{!!$leaves->id!!}">Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/Edit/add-leave/{!!$leaves->id!!}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="/delete/leave/{!!$leaves->id!!}" title="Decline" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
            </div>
        </div>


@endsection