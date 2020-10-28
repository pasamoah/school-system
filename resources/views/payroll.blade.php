@extends('layout.app')


@section('content')

<div class="content">


<div class="row">
  <div class="col-sm-12">
  <h4 class="page-title">Add Staff Salary</h4>
  </div>
</div>

<div>
  @include('inc.errorfile')
</div>

  <span style="float:right; margin-right: 50px" >
    <button onclick="document.getElementById('id01').style.display='block'"
     class="btn btn-primary btn-lg">Staff Salary List</button>
  </span>
</div>
    
<form method="POST" action="{{URL::to('/staff/salary')}}" enctype="multipart/form-data">
  @csrf
    <table style="width:95%;">
  <tr>
    <th style="padding: 30px">
    <label>Staff ID</label>

    <input type="text" id="staffs" list="staffid" class="form-control" name="staff_number" onchange="selectSalary()" />
    <datalist id="staffid">
	   @foreach($staff as $staff)
     <option value="{{$staff -> staff_id}}">{{$staff -> staff_id }}</option>
     @endforeach

    </datalist><br>


    <label style="font-size: 20px; color: blue">Earnings</label><br>
    <label>Basic</label>
    <input type="text" name="basic" class="form-control" value="">
      

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
<div style="margin-left: 20px"><button id="center" type="submit" class="btn btn-primary btn-lg">Submit</button></div>
  </form>



  <div id="id01" class="modal">
  
<div style="background-color: #ffffff; width: 100%;" class="modal-content" >
      <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
    </div>
    <span>
      <input type="text" style="width: 30%; margin-left: 30px" id="myInput" onkeyup="myFunction()" placeholder="Search for Staff ID.." title="Staff ID..">
      <input type="text" style="width: 30%; margin-left: 10px" id="myInputsemail" onkeyup="myFunctionemail()" placeholder="Staff Name.." title="email">
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block;border: 1px solid #181b70;">CSV</button>
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block; border: 1px solid #181b70;">Excel</button>
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block; border: 1px solid #181b70;">Pdf</button>
      <button style="color: #ffffff; background-color: #3136a8;display: inline-block; border: 1px solid #181b70;"><i class="fas fa-print"></i>&nbsp;Print</button>
    </span>



    <table id="tableData" class="table table-hover" style="margin: 10px" >
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
         @foreach($salarylistpayrollspage as $stp)
         <tr>
            <td>EST {{$stp->staff_id}}</td>

            <td style="text-align:center; padding-top: 7px; " title="Click to view profile">
              <a href="/staff/{!! $stp -> staff_id !!}" style="color: #000000; text-decoration: none;">
                <img src="/uploads/{{$stp->image}}" style="width: 50px;height: 50px; border-radius: 50%; float:left;" alt="{{$stp->image}}" >
              <div style="float:left; margin-left: 5px; margin-top: 2px">
              <small><b>{{$stp->firstname_staff}} {{$stp->lastname_staff}}</b></small><br>
              <small style="float: left;">{{$stp->department_staff}}</small>
              </div>
            </td>
            </a>

            <td><a href="mailto:{!!$stp->email_staff!!}">{{$stp->email_staff}}</a></td>

            <td>Gh₵ {{$stp->basic_salary}}</td>
            <td>{{$stp->department_staff}}</td>
            <td>{{$stp->joining_date}}</td>
            <td>
              <select class="form-control">
                <option selected>{{$stp->designation_staff}}</option>
              </select>
            </td>
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

      {!! $salarylistpayrollspage->links() !!}
</div>


	


</div>



<script>
   
   function selectSalary(){

    const id = document.getElementById('staffs');
        var staff_id = id.value
            $.ajax({
              url: '/getsalary-amount/'+ staff_id,
              dataType: 'JSON',
              type: 'GET',
              success: function (data) {
                console.log(data)
                 document.getElementsByName("basic")[0].value = data
              },
              error: function (err) {
            console.log(err);
            }
            });  

   }                                                                           

</script>







@endsection