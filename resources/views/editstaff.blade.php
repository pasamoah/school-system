@extends('layout.app')



@section('content')


<link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.3.92/css/materialdesignicons.min.css">
    <link href="{{asset('css/tower-file-input.css')}}" rel="stylesheet" />
    <script src="{{asset('js/tower-file-input.js')}}"></script>

<div style="margin-left: 10px; margin-bottom: 70px">

<div>
	<h4 style="margin: 20px; font-weight: 600; font-size: 22px; font-family: candara">EDIT STAFF PROFILE</h4>
</div>

<div  class="container">

  @include('inc.errorfile')

	<div class="row">
		<div class="col-8">
			<form method="POST" action="/update/<?php echo $staffupdate->staff_id; ?>" enctype="multipart/form-data">

     {{csrf_field()}}

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">First Name</label>
      <input type="text" class="form-control" placeholder="First Name" value="{!! $staffupdate-> firstname_staff !!}" name="firstname_staff">
    </div>
    <div class="form-group col-md-6">
      <label for="">Last Name</label>
      <input type="text" class="form-control" placeholder="Last Name" value="{!! $staffupdate-> lastname_staff !!}" name="lastname_staff">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" class="form-control" placeholder="Email" value="{!! $staffupdate-> email_staff !!}" name="email_staff">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Adress</label>
      <input type="text" class="form-control" placeholder="Address" value="{!! $staffupdate-> address_staff !!}" name="address_staff">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Joining Date</label>
      <div class="cal-icon">
      <input type="text" class="form-control datetimepicker" placeholder="Joining Date" value="{!! $staffupdate-> joining_date !!}" name="joining_date">
    </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Gender</label>
      <select name="gender" class="form-control">
       <option value="{!! $staffupdate-> staff_gender !!}">{{$staffupdate-> staff_gender}}</option> 
       <option value="Male">Male</option>
       <option value="Female">Female</option>
      </select>
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="number">Phone Number</label>
      <input type="number" class="form-control" placeholder="Phone" value="{!! $staffupdate-> phone_staff !!}" name="phone_staff">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Department</label>
      <input type="text" class="form-control" placeholder="Department" value="{!! $staffupdate-> department_staff !!}" name="department_staff">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="number">Designation</label>
      <input type="text" class="form-control" placeholder="Designation" value="{!! $staffupdate-> designation_staff !!}" name="designation_staff">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Date of Birth</label>
      <div class="cal-icon">
      <input type="text" class="form-control" placeholder="DoB" value="{!! $staffupdate-> dob_staff !!}" name="dob_staff">
    </div>
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="number">Basic Salary</label>
      <input type="text" class="form-control" placeholder="Basic Salary" value="{!! $staffupdate-> basic_salary !!}" name="basic_salary" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Educational Levels</label>
      <input type="text" class="form-control" placeholder="Password" value="{!! $staffupdate-> edu_staff !!}" name="staff_edu">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="number">Last Employer</label>
      <input type="text" class="form-control" placeholder="Employer" value="{!! $staffupdate-> last_employer_staff !!}" name="last_employer_staff">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Photo/Image</label>
          <div class="tower-file">
            <input type="file" id="demoInput5" name="image" multiple />
            <label for="demoInput5" class="btn btn-primary">
                <span class="mdi mdi-upload"></span>Select Files
            </label>
            <button type="button" class="tower-file-clear btn btn-secondary align-top">Clear</button>
         </div>
           <div id="demo-code-5" class="collapse">
                <pre><code>&lt;div class=&quot;tower-file&quot;&gt;
          &lt;input type=&quot;file&quot; id=&quot;demoInput5&quot; /&gt;
          &lt;label for=&quot;demoInput5&quot; <span class="highlight">class=&quot;btn btn-primary&quot;</span>&gt;
              &lt;span class=&quot;mdi mdi-upload&quot;&gt;&lt;/span&gt;Select Files
          &lt;/label&gt;
          &lt;button type=&quot;button&quot; <span class="highlight">class=&quot;tower-file-clear btn btn-secondary</span> align-top&quot;&gt;
              Clear
          &lt;/button&gt;
      &lt;/div&gt;
      </code>
      <code>$('#demoInput5').fileInput({
          iconClass: 'mdi mdi-fw mdi-upload'
      });</code></pre>
                  </div>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary btn-lg">Update</button>
</form>
	

</div>


	<div class="col-4">
		
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="/uploads/{!! $staffupdate-> image !!}" alt="Card image cap">
		  <div class="card-body">
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="/staff/{!! $staffupdate-> staff_id !!}" class=" btn btn-primary">view more</a>
		  </div>
		</div>

		



	</div>
		
	</div>
	
</div>
	
</div>
<script type="text/javascript">
            $('#demoInput5').fileInput({
            iconClass: 'mdi mdi-fw mdi-upload'
        });
</script>


@endsection