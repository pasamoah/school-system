
<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu" style="text-decoration: none;">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                        <a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>

                        <li class="{{ request()->is('dashboard/new-student') ? 'active' : '' }}">
                            <a href="/dashboard/new-student"><i class="fa fa-sign-language"></i> <span>Admissions</span></a>
                        </li>
                        @can('create', App\Student::class)

                        <li class="{{ request()->is('student-list') ? 'active' : '' }}">
                            <a href="/student-list"><i class="fa fa-users fa-fw"></i> <span>Students</span></a>
                        </li>
                        @endcan

                        <li class="submenu">
                          <a href="#" class="{{ request()->is('*exams-list*') ? 'menu-open' : '' }}"><i class="fa fa-pencil"></i> <span> Academics </span> <span class="menu-arrow"></span></a>
                          <ul style="display: none;">
                            <li class="{{ request()->is('exams-list') ? 'active' : '' }}"><a href="/exams-list">Quizzes</a></li>
                            <li class="{{ request()->is('add-courses') ? 'active' : '' }}"><a href="/add-courses">Register Course</a></li>
                            <li><a href="/dashboard/all-assignments">Assignments</a></li>
                            <li><a href="/dashboard/section-classes">Section & Classes</a></li> 
                            <li><a href="/dashboard/academic-year">Academic Year</a></li>
                            <li><a href=""# data-toggle="modal" data-target=".bd-example-modal-lg">Promotion</a></li>
                          </ul>
                        </li>
                        <li class="{{ request()->is('student/result') ? 'active' : '' }}">
                            <a href="/student/result"><i class="fa fa-newspaper-o"></i> <span>Results</span></a>
                        </li>
                        <li class="{{ request()->is('dashboard/librarystore') ? 'active' : '' }}">
                            <a href="/dashboard/librarystore"><i class="fa fa-book"></i> <span>Library</span></a>
                        </li>
                        <li class="{{ request()->is('dashboard/live-class-room') ? 'active' : '' }}">
                            <a href="/dashboard/live-class-room"><i class="fa fa-video-camera" aria-hidden="true"></i><span>Live Class Room</span></a>
                        </li>
                        <li class="{{ request()->is('departments') ? 'active' : '' }}">
                            <a href="/departments"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                        </li>


<!-- 
            <li class="submenu">
              <a href="#"><i class="fa fa-flag" aria-hidden="true"></i> <span> Atteendance</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="/dashboard/attendance/student">Student</a></li>
                <li><a href="/dashboard/leaves">Employee</a></li>
              </ul>
            </li>  -->

            <li class="submenu">
              <a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="/staff">Employees List</a></li>
                <li><a href="/dashboard/leaves">Leaves</a></li>
              </ul>
            </li>
            @can('create', App\Payment::class)
            <li class="submenu">
              <a href="#"><i class="fa fa-money"></i> <span> Fee Management </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="/dashboard/fee-management/fee-type">Create Fee</a></li>
                <li><a href="/payments">Fee Collection</a></li>
                <li><a href="/dashboard/expenses">Expenses</a></li>
              </ul>
            </li>
            @endcan
            <li class="submenu">
              <a href="#"><i class="fa fa-handshake-o"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="/dashboard/salary"> Employee Salary </a></li>
                <li><a href="/dashboard/payroll"> Add New </a></li>
                <li><a href="/dashboard/payroll"> Advance Salary </a></li>
              </ul>
            </li>
            <li class="submenu">
                <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="/dashboard/compose-email">Compose Mail</a></li>
                    <li><a href="inbox.html">Inbox</a></li>
                </ul>
            </li>


            <li class="submenu">
              <a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="/staff">Student Analytics</a></li>
                <li><a href="/staff">Payments Received</a></li>
                <li><a href="/dashboard/leaves">Expenses</a></li>
                <li><a href="attendance.html">Balance Sheet</a></li>
              </ul>
            </li>

                        
            
            <li class="submenu">
              <a href="#"><i class="fa fa-paper-plane"></i> <span> SMS </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="/dashboard/sms-portal/create"> Compose SMS </a></li>
                <li><a href="/dashboard/sent-message"> View All SMS </a></li>
              </ul>
            </li>
                        <li>
                            <a href="/dashboard-settings"><i class="fa fa-cog"></i> <span>Setting</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- End of sideBar -->


<!-- PROMOTION MODAL -->

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div style="padding: 25px">
                <div class="page-title">
                    Select Ground
                </div>
                  <form method="GET" action="{{URL::to('/promotion/filter')}}">
                    @csrf
                      <div class="form-group">
                        <label>Class</label>
                          <select class="form-control" name="course">
                            @foreach($class_list as $class_list)
                              <option>{!! $class_list->class_name !!}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Section</label>
                          <select class="form-control" name="section">
                            @foreach($section_list as $list)
                              <option>{!! $list->section_name !!}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group">
                          <button class="btn btn-outline-success btn-lg">Filter</button>
                      </div>
                  </form>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END MODAL -->


        <!-- MOdal fofr staffList -->

<!-- Modal -->
<div class="modal fade" id="listview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Staff List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <span>
      <input type="text" style="width: 30%; margin-left: 30px" id="myInput" onkeyup="myFunction()" placeholder="Search for Staff ID.." title="Staff ID..">
    </span>
    <span>
        <input type="text" style="width: 30%; margin-left: 10px" id="myInputsemail" onkeyup="myFunctionemail()" placeholder="Department.." title="email"></span>

    <span class="btn-group btn-group-sm">                      
    <button class="btn btn-white">CSV</button>
    <button class="btn btn-white">PDF</button>
    <button class="btn btn-white" onclick="window.print()"><i class="fa fa-print fa-lg"></i> Print</button>       
    </span>


  <table id="tableData" class="table table-striped custom-table mb-0 datatable table-sm" style="margin: 10px" style="width: 70%">
  <thead>
         <tr>
           <td><input type="checkbox" id="main"></td>
            <td><b>Staff ID</b></td>
            <td width="300px"><b>Name2</b></td>
            <td><b>Email</b></td>
            <td><b>Phone</b></td>
            <td><b>Department</b></td>
            <td><b>Join Date</b></td>
            <td><b>Role</b></td>
            <td><b>Action</b></td>
         </tr>
    </thead>

         @foreach($staff as $stp)
         <tr>
          <td><input type="checkbox" id="checkItem" name="checked[]" value="{!! $stp->staff_id!!}"></td>
            <td>EST {{$stp->staff_id}}</td>
            <td style="min-width: 200px;">
            <a class="avatar" href="/staff/{!! $stp -> staff_id !!}"><img src="/uploads/{{$stp->image}}" style=" border-radius: 50%;" alt="{{$stp->image}}"></a>
            <h2><a href="/staff/{!! $stp -> staff_id !!}">{{$stp->firstname_staff}} {{$stp->lastname_staff}}</a><span>{{$stp->department_staff}}</h2> 
          </td>

            <td><a href="mailto:{!!$stp->email_staff!!}">{{$stp->email_staff}}</a></td>

            <td>{{$stp->phone_staff}}</td>
            <td>{{$stp->department_staff}}</td>
            <td>{{$stp->joining_date}}</td>
            <td>{{$stp->designation_staff}}</td>
            <td>
              
            <div class="dropdown">
              <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="staff/edit/{!! $stp -> staff_id !!}"><i class="fa fa-pencil m-r-5"></i>Edit</a>
                <a class="dropdown-item" href="/staff/delete/{!! $stp -> staff_id !!}"><i class="fa fa-trash-o m-r-5"></i>Delete</a>
              </div>
            </div>
            </td>
         </tr>
         @endforeach

       
      </table>

      </div>
      <div class="modal-footer">
        <span><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></span>
        <span><button type="button" class="btn btn-danger" data-dismiss="modal">Delete All</button></span>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<script type="text/javascript">
    
  $('#main').click(function (){
    $('input:checkbox').not(this).prop('checked', this.checked)
  });

</script>

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('assets/js/Chart.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/chart.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>

    <script src="{{ asset('assets/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/js/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ asset('asassets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>