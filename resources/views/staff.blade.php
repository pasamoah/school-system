@extends('layout.app')


@section('content')


        <div class="content" style="margin-bottom: 100px">
                <div class="row">
                    <div class="col-sm-4 col-3">
                      @include('inc.errorfile')
                        <h4 class="page-title">Employee</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="/add-staff" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#newstaff"><i class="fa fa-plus"></i> Add Employee</a>
                        <a href="" class="btn btn-default btn-rounded float-right" data-toggle="modal" data-target="#listview"><img src="{{asset('/images/menu.png')}}" alt="Table" width="25px" height="25px"></a>
                    </div>
                </div>
        <div class="row doctor-grid">

                      @foreach( $stafflisting as $stp)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="/staff/{!! $stp -> staff_id !!}"><img alt="" src="/uploads/{{$stp->image}}"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="/staff/edit/{!! $stp -> staff_id !!}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="/staff/delete/{!! $stp -> staff_id !!}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="/staff/{!! $stp -> staff_id !!}">{{$stp->firstname_staff}} {{$stp->lastname_staff}}</a></h4>
                            <div class="doc-prof">{{$stp->designation_staff}}</div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> {{$stp->address_staff}}
                            </div>
                        </div>
                    </div>

                    @endforeach
                    
        <div class="row">
                    <div class="col-sm-12">
                        <div class="see-all">
                            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div>
            </div>


<!-- Staff Model -->


<!-- Modal -->
<div class="modal fade" id="newstaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{URL::to('staff/submit')}}" enctype="multipart/form-data" method="post">
      
      {{csrf_field()}}

      <div class="form-group">
      <label for="uname"><b>Staff ID</b></label>
      <input type="text" value="<?php echo ( "367". rand(80, 100000)) ?>"  name="staff_id" class="form-control" readonly required>
      </div>

    <div class="form-group">
      <label for="uname"><b>First Name</b></label>
      <input type="text"  name="firstname_staff" class="form-control" required>
    </div>
    
       <div class="form-group">
      <label for="uname"><b>Last Name</b></label>
      <input type="text"  name="lastname_staff" class="form-control" required>
     </div>

            <div class="form-group">
      <label for="uname"><b>Gender</b></label>
      <select name="gender" class="form-control">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
     </div>
            
       <div class="form-group">
            <label for="uname"><b>Email</b></label>
      <input type="email"  name="email_staff" class="form-control" required>
    </div>

    <div class="form-group">
            <label for="uname"><b>Address</b></label>
      <input type="text"  name="address_staff" class="form-control" required>
    </div>

 <div class="form-group">
            <label for="uname"><b>Joining Date</b></label>
              <div class="cal-icon">
              <input type="text" name="joining_date" class="form-control datetimepicker" required="">
          </div>
  </div>

    <div class="form-group">
            <label for="uname"><b>Phone Number</b></label>
      <input type="text" name="phone_staff" class="form-control" required>
    </div>
            
      <div class="form-group">
            <label for="uname"><b>Department</b></label>
      <select name="department_staff" class="form-control" required>
        <option value="" disabled selected>Select your option</option>
        @foreach($departments as $departments)
        <option>{{$departments->department_name}}</option>
        @endforeach
      </select>
      </div>

    <div class="form-group">
            <label for="uname"><b>Dessignation</b></label>
      <input type="text" name="designation_staff" class="form-control" required><br>
    </div>
      <div class="form-group">
          <label><b>Date of Birth</b></label>
          <div class="cal-icon">
              <input type="text" name="dob_staff" class="form-control datetimepicker" required="">
          </div>
      </div>

    <div class="form-group">
      <label for="uname"><b>Basic Salary</b></label>
       <select  style="width: 150px" id="studentfields" class="form-control" name="basic_salary" required>
        <option selected>1500</option>
        <option selected>3000</option>
      </select>
    </div>

      <div class="form-group">
      <label for="uname"><b>Educational Level</b></label>
       <select  style="width: 150px" id="studentfields" class="form-control" name="staff_edu" required>
        <option selected>Certificate</option>
        <option selected>HND/Diploma</option>
        <option>Degree</option>
        <option>Masters</option>
        <option>PHD</option>
      </select>
      </div>

      <div class="form-group">
      <label for="uname"><b>Last Employer</b></label>
      <input type="text" name="last_employer_staff" class="form-control" required>
      </div>

          
          <div class="form-group">
                    <label>Avatar</label>
                    <div class="profile-upload">
                      <div class="upload-img">
                        <img alt="" src="assets/img/user.jpg">
                      </div>
                      <div class="upload-input">
                        <input type="file" class="form-control" name="image">
                      </div>
                    </div>
                  </div>

        <button type="submit" class="btn btn-primary">Save</button>
      </form>


        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- ListView -->





<script type="text/javascript" src="paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:10});
            });
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

  function myFunctionemail() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInputsemail");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}



  $("#master").click(function (){
    $('input:checkbox').not(this).prop('checked', this.checked)
  });

</script>





@endsection