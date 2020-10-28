

@extends('layout.app')

@section('content')

            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Payment List</h4>
                        @include('inc.errorfile')
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <a href="/payments" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> New Payment</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">From</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Status</label>
                            <select class="form-control" >
                                <option>Select Status</option>
                                <option>owing</option>
                                <option>paid</option>
                                <option>Over Paid</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Fee type</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Amount Paid</th>
                            <th scope="col">Status</th>
                            <th scope="col">Balance</th>
                            <th scope="col">paid By</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($studentdata as $data)
                                    <tr>
                                        <td>{{$data -> student_id}}</td>
                                        <td>{{$data -> f_name}} {{$data -> surname}}</a></td>
                                        <td>{{$data -> fee_type}}</td>
                                        <td>GH₵ {{$data -> amount_expected}}.00</td>
                                        <td>GH₵ {{$data -> amount}}.00</td>
                                        <td>
        @if( $data -> status == "Full Payment"  )
        <span class="custom-badge status-blue">{{$data -> status}}</span>

        @endif

        @if( $data -> status == "Owing")

        <span class="custom-badge status-orange">{{$data -> status}}</span>

        @endif

        @if( $data -> status == "Overpaid")

        <span class="custom-badge status-green">{{$data -> status}}</span>

        @endif
                                        </td>

                                        <td>GH₵ {{$data -> balance}}.00</td>
                                        <td>{{$data -> paid_by}}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{URL::to('/editpayment/' . $data -> id .'/'. $data->student_id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{URL::to('/editpayment/print/' . $data -> id .'/'. $data->student_id)}}"><i class="fa fa-eye m-r-5"></i> View</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
                          <a class="dropdown-item" href="/delete/payment/{!! $data->id !!}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                      </tr>
                                      @endforeach
                                    </tbody>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection