 
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
                                    @foreach($leaves as $leaves)
                                    <tr>
                                        <td>
                                          {{$leaves->id}}  
                                        </td>
                                        <td>{{$leaves->leave_type}}</td>
                                        <td>{{$leaves->leave_from}}</td>
                                        <td>{{$leaves->leave_to}}</td>
                                        <td>{{$leaves->leave_number_of_day}}</td>
                                        <td>{!!substr($leaves->leave_reason,0,30)!!}..</td>
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
                                                    <a class="dropdown-item" href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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