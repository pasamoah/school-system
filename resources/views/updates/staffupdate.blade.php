@extends('layout.app')
   

@section('content')


<style type="text/css">
  
  input{
    width: 300px;
    display: flex;

  }



</style>

        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">



<div style="margin-left: 20px; margin-right: 15px; margin-top: 10px">
<form action="{{URL::to('staff/submit')}}" enctype="multipart/form-data" method="post">

    <p style="text-align: center; font-size: 20px"><b>Add Staff</b></p>

    <div class="container">

      {{csrf_field()}}

      <div style="display: flex; align-content: space-between;">

      <label for="uname"><b>Staff ID</b></label>
      <input type="number"  name="staff_id" class="formcontrol" required>

    
      <label for="uname"><b>First Name</b></label>
      <input type="text"  name="firstname_staff" class="formcontrol" required>

      </div>


      <div style="display: flex;">

      <label for="uname"><b>Last Name</b></label>
      <input type="text"  name="lastname_staff" class="formcontrol" required>
  
            <label for="uname"><b>Email</b></label>
      <input type="email"  name="email_staff" class="formcontrol" required>

      </div>

      
      <div style="display: flex;">
      <label for="uname"><b>Joining Date</b></label>
      <input type="text" name="joining_date" id="datepicker" class="formcontrol" required>

      <label for="uname"><b>Phone Number</b></label>
      <input type="text" name="phone_staff" class="formcontrol" required>

      </div>

            <label for="uname"><b>Department</b></label>
      <input type="text" name="department_staff" class="formcontrol" required>

            <label for="uname"><b>Dessignation</b></label>
      <input type="text" name="designation_staff" class="formcontrol" required><br>&nbsp;&nbsp;<br>

             <label for="uname"><b>Date of Birth</b></label>
      <input type="text" class="stafff" name="dob_staff" required>

      <label for="uname"><b>Basic Salary</b></label>
       <select  style="width: 150px" id="studentfields" class="stafff" name="basic_salary" required>
        <option selected>1500</option>
        <option selected>3000</option>
      </select><br><br>

            &nbsp;&nbsp;&nbsp;<label for="uname"><b>Educational Level</b></label>
       <select  style="width: 150px" id="studentfields" class="stafff" name="staff_edu" required>
        <option selected>Certificate</option>
        <option selected>HND/Diploma</option>
        <option>Degree</option>
        <option>Masters</option>
        <option>PHD</option>
      </select><br>

      <label for="uname"><b>Last Employer</b></label>
      <input type="text" name="last_employer_staff" class="formcontrol" required>

      <div style="margin-top: 12px">
        <label for="uname"><b>Photo/Image</b></label>
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
        
      <button id="center" type="submit" class="btn btn-primary btn-lg">Submit</button>

    </div>

  </form>
</div>


<script type="text/javascript">
            $('#demoInput5').fileInput({
            iconClass: 'mdi mdi-fw mdi-upload'
        });
</script>




@endsection