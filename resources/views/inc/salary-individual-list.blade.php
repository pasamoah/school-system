
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-list-ul" aria-hidden="true"></i> List Salary</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-calendar-check-o"></i> Monthly Salary</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<!-- Accordion -->
  	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Salaries
        </button>
      </h2>
    </div>

                    <div class="col-sm-7 col-8">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white">PDF</button>
                            <button class="btn btn-white" onclick="window.print()"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                    </div>
<!-- List of salaries in Tablular Form -->
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
         <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Basic Salary</th>
                                        <th>Total Earnings</th>
                                        <th>Total deduction</th>
                                        <th>Date Created</th>
                                        <th>Net Salary</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($salaries as $salaries)
                                    <tr>
                                        <td>
                                          {{$salaries->id}}  
                                        </td>
                                        <td>GHc {{$salaries->basic}}</td>
                                        <td>GHc {{$salaries->total_earnings}}</td>
                                        <td>GHc {{$salaries->total_deductions}}</td>
                                        <td>{{$salaries->created_at}}</td>
                                        <td>GHc {{$salaries->net_salary}}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/Edit/add-leave/{!!$salaries->id!!}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="/delete/salary/{!!$salaries->id !!}" title="Decline" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
  </div>
  
</div>
  	
  </div>

<!-- Tab for Bulk -->
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Monthly Salary
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <form method="GET" action="{{URL::to('/staff/slip/{!! $staff_detail -> staff_id !!}')}}" enctype="multipart/form-data">
                    <input type="number" name="st" value="{!! $staff_detail->staff_id !!}" hidden>
                    <label>Select Month</label>
                    <select name="salarymonth" class="form-control" style="width: 150px">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                    </select>
                    <div style="margin-top: 4px"><button class="btn btn-primary">View Slip</button></div>
                </form>

      </div>
    </div>
  </div>
  
</div>
  	
  	
  </div>
</div>
</div>