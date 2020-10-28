
@extends('layout.app')


@section('content')

<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

#center{
	margin-top: 40px;
	width: 180px; 
	height: 55px;
	border-radius: 50px; 
	font-size: 18px;
	left: 50%;
	position: absolute;
	-ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}


.stafff{
  width: 210px;
  height: 50px;
  margin-left: 7px;
  padding-left: 10px;
  border-radius: 4px;
  display: inline-block;
  border: 1px solid #ccc;
}

/*pop-up form style


/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.3.92/css/materialdesignicons.min.css">
    <link href="{{asset('css/tower-file-input.css')}}" rel="stylesheet" />
    <script src="{{asset('js/tower-file-input.js')}}"></script>

<div style="margin-left: 10px">
	<span style="font-size: 25px">Staff</span>
	<span style="float: right; margin-right:20px "><button  onclick="document.getElementById('salary').style.display='block'" class="btn btn-success btn-lg"><i class="fab fa-angellist"></i>&nbsp;Salary</button></span>

	<span style="float: right; margin-right:20px "><button onclick="document.getElementById('id01').style.display='block'" class="btn btn-success btn-lg"><i class="fas fa-user-plus"></i>&nbsp;Add Staff</button></span>

  <span style="float: right; margin-right:20px; "><a title="Grid form" href="/staff" style="background-color: white; border: none;"><i class="fas fa-grip-horizontal"></i></a></span>

  <span style="float: right; margin-right:20px "><button title="table form" style="background-color: #ffffff; border:none;"  onclick="document.getElementById('table').style.display='block'"><i class="fas fa-bars"></i></button></span>



</div>

  <div style="width: 50%; margin-left: 220px">
    @include('inc.errorfile')
  </div>

<div style=" 
  font-size: 15px; 
  margin-top: 15px;
  padding: 0px 20px 0px 60px;">


<div class="row">
  @foreach( $stafflisting as $stp)
  <div class="column">
    <div class="card">
      <span>

        <img src="/uploads/{{$stp->image}}" style="width: 90px; height: 90px; border-radius: 50%"> <br><br>
      <small style="font-size: 16px">
      <a href="/staff/{!! $stp -> staff_id !!}" style="text-decoration: none;color: #000000">{{$stp->firstname_staff}} {{$stp->lastname_staff}}</a>	
      </small>
      <p class="cardtext">
        <div class="dropdown" style="height: 5px">
          <button class="dropbtn"><i class="fas fa-angle-double-down"></i></button>
          <div class="dropdown-content">
          <a href="staff/edit/{!! $stp -> staff_id !!}"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
          <a href="/staff/delete/{!! $stp -> staff_id !!}"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
          <a href="/staff/staffprofile/payslip/{!! $stp -> staff_id !!}"><i class="fas fa-money-check-alt"></i>&nbsp;&nbsp; PaySlip </a>
          </div>
        </div>

      <a href="/student-list" style="text-decoration: none">
        <small style="font-size: 13px">&nbsp;&nbsp;{{$stp->designation_staff}}</small></a>
    </span>

    </div>
  </div>
  @endforeach

  </div>

<div style="margin: 30px; float: right;">
{!! $stafflisting->links() !!}
</div>


  <div id="id01" class="modal">
  
  <form class="modal-content animate" action="{{URL::to('staff/submit')}}" enctype="multipart/form-data" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
    </div>

    <p style="text-align: center; font-size: 20px"><b>Add Staff</b></p>

    <div class="container">

      {{csrf_field()}}

      <div class="form-group">
      <label for="uname"><b>Staff ID</b></label>
      <input type="number"  name="staff_id" class="form-control" required>
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
            <label for="uname"><b>Email</b></label>
      <input type="email"  name="email_staff" class="form-control" required>
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
      <input type="text" name="department_staff" class="form-control" required>
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
       <select  style="width: 150px" id="studentfields" class="stafff" name="basic_salary" required>
        <option selected>1500</option>
        <option selected>3000</option>
      </select>
    </div>

      <div class="form-group">
      <label for="uname"><b>Educational Level</b></label>
       <select  style="width: 150px" id="studentfields" class="stafff" name="staff_edu" required>
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

      <button id="center" type="submit" class="btn btn-primary btn-lg">Submit</button>


    <div class="container" style="background-color:#f1f1f1; margin-top: 70px">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</button>
    </div>
  </form>
</div>


<script type="text/javascript">
            $('#demoInput5').fileInput({
            iconClass: 'mdi mdi-fw mdi-upload'
        });
</script>



 <div id="table" class="modal">
  

    <div style="background-color: #ffffff; width: 90%;" class="modal-content" >
      <div class="imgcontainer">
      <span onclick="document.getElementById('table').style.display='none'" class="close" title="Close">&times;</span>
    </div>
    <span>
      <input type="text" style="width: 30%; margin-left: 30px" id="myInput" onkeyup="myFunction()" placeholder="Search for Staff ID.." title="Staff ID..">
      <input type="text" style="width: 30%; margin-left: 10px" id="myInputsemail" onkeyup="myFunctionemail()" placeholder="Staff Name.." title="email">
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block;border: 1px solid #181b70;">CSV</button>
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block; border: 1px solid #181b70;">Excel</button>
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block; border: 1px solid #181b70;">Pdf</button>
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block; border: 1px solid #181b70;"><i class="fas fa-print"></i>&nbsp;Print</button>
    </span>



    <table id="tableData" class="table table-hover" style="margin: 10px" style="width: 70%">
  <thead>
         <tr>
            <td><b>Staff ID</b></td>
            <td><b>Name</b></td>
            <td><b>Email</b></td>
            <td><b>Phone</b></td>
            <td><b>Department</b></td>
            <td><b>Join Date</b></td>
            <td><b>Role</b></td>
            <td><b>Action</b></td>
         </tr>
    </thead>
         @foreach($stafflisting as $stp)
         <tr>
            <td>EST {{$stp->staff_id}}</td>

            <td style="text-align:center; padding-top: 7px; " title="Click to view profile">
              <a href="/staff/{!! $stp -> staff_id !!}" style="color: #000000; text-decoration: none;">
                <img src="uploads/{{$stp->image}}" style="width: 50px;height: 50px; border-radius: 50%; float:left;" alt="{{$stp->image}}" >
              <div style="float:left; margin-left: 5px; margin-top: 2px">
              <small><b>{{$stp->firstname_staff}} {{$stp->lastname_staff}}</b></small><br>
              <small style="float: left;">{{$stp->department_staff}}</small>
              </div>
            </td>
            </a>

            <td><a href="mailto:{!!$stp->email_staff!!}">{{$stp->email_staff}}</a></td>

            <td>{{$stp->phone_staff}}</td>
            <td>{{$stp->department_staff}}</td>
            <td>{{$stp->joining_date}}</td>
            <td>{{$stp->designation_staff}}</td>
            <td>
              
            <div class="dropdown">
              <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
                <a class="dropdown-item" href="/staff/delete/{!! $stp -> staff_id !!}"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
              </div>
            </div>
            </td>
         </tr>
         @endforeach

       
      </table>
     <div class="container" style="background-color:#f1f1f1; margin-top: 10px; width: 100%">
      <button type="button" onclick="document.getElementById('table').style.display='none'" class="btn btn-danger">Cancel</button>
    </div>

    </div>
  
  

</div>




 <div id="salary" class="modal">
  

    <div style="background-color: #ffffff; width: 64%;" class="modal-content" >
      <div class="imgcontainer">
      <span onclick="document.getElementById('salary').style.display='none'" class="close" title="Close">&times;</span>
    </div>

    <div style="text-align: center; font-size: 25px"><b>Add Staff Salary</b></div>
    
<form method="POST" action="{{URL::to('/staff/salary')}}" enctype="multipart/form-data">
  @csrf
    <table style="width:95%;">
  <tr>
    <th style="padding: 30px">
    <label>Staff ID</label>

    <input type="text" list="staffid" class="form-control" name="staff_number" />
    <datalist id="staffid">
          @foreach($salarylist as $items)
          <option>{{$items->staff_id}}<option>
          @endforeach

    </datalist><br>




    <label style="font-size: 20px; color: blue">Earnings</label><br>
    <label>Basic</label>
       <select class="form-control" name="basic">
        <option selected>1500</option>
        <option selected>3000</option>
      </select><br>
      

    <label>DA(40%)</label>
    <input type="text" name="da" class="form-control" ><br>

    <label>HRA(15%)</label>
    <input type="text" name="hra" class="form-control"><br>

    <label>Conveyance</label>
    <input type="text" name="conveyance" class="form-control"><br>

    <label>Allowance</label>
    <input type="text" name="allowance" class="form-control"><br>

    <label>Medical Allowance</label>
    <input type="text" name="medical_allowance" class="form-control"><br>

    <label>Others</label>
    <input type="text" name="others" class="form-control"><br>
    </th>


    <th>
    <label>Month</label>
    <select class="form-control" name="salary_month">
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
    </select><br>

    <label style="font-size: 20px; color: blue">Deductions</label><br>
    <label>TDS</label>
    <input type="text" name="tds" class="form-control"><br>

    <label>ESI</label>
    <input type="text" name="esi" class="form-control"><br>

    <label>PF</label>
    <input type="text" name="pf" class="form-control"><br>

    <label>Leave</label>
    <input type="text" name="leave" class="form-control"><br>

    <label>Prof. Tax</label>
    <input type="text" name="ptax" class="form-control"><br>

    <label>Labour Welfare</label>
    <input type="text" name="labour_welfare" class="form-control"><br>

    <label>Loans & others</label>
    <input type="text" name="n_others" class="form-control"><br>



    </th>

  </tr>
</table>

  <button id="center" type="submit" class="btn btn-primary btn-lg">Submit</button>
  </form>

      


     <div class="container" style="background-color:#f1f1f1; margin-top: 30px; width: 100%">
      <button type="button" onclick="document.getElementById('table').style.display='none'" class="btn btn-danger">Cancel</button>
    </div>

    </div>
  
  

</div>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
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
    td = tr[i].getElementsByTagName("td")[1];
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

</script>







  @endsection