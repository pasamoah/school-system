@extends('layout.app')


@section('content')
<div class="content">

  <div class="page-title">
    Edit Student Profile
  </div><hr>
    <div class="container-fluid">
      <div>
        @include('inc.errorfile')
      </div>
    <div class="row">
  <div class="col-8">

     <form method="POST" action="/profile/<?php echo $profile->std_id; ?>" enctype="multipart/form-data">

     {{csrf_field()}}

      <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Student ID<span class="text-danger">*</span></label>
      <input type="" class="form-control" name="studentID" value="{!! $profile ->std_id !!}" readonly="">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Promote To Class/Programme<span class="text-danger">*</span></label>
      <select class="form-control" name="Programme" id="inputEmail4">
        <option selected="{!! $profile ->Programme !!}">{{$profile -> Programme}}</option>
        @foreach($class_list as $list)
        <option>{{$list->class_name}}</option>
        @endforeach 
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Current Year/Level<span class="text-danger">*</span></label>
      <div class="input-group">
        <select class="form-control" name="cLevel">
        <option value="{!! $profile -> c_level !!}"  selected>{{$profile -> c_level}}</option>
        
        <option>Level 100</option>

      </select>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Profile Photo<span class="text-danger">*</span></label>
      <input type="file" class="form-control" name="image" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>

    

      <span>Student Personal Information</span><hr>
      <div class="form-row">

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Surname/Other Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="surName" placeholder=" Other Name" value="{!! $profile ->surname !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Frist Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="fName" placeholder=" First Name" value="{!! $profile ->f_name !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Date of Birth<span class="text-danger">*</span></label>
          <div class="cal-icon">
          <input type="text" class="form-control datetimepicker" name="DoB" placeholder="Date of Birth" value="{!! $profile ->DoB !!}">
          </div>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Email<span class="text-danger">*</span></label>
          <input type="email" class="form-control" placeholder="Email" name="fEmail" value="{!! $profile ->f_email !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Password<span class="text-danger">*</span></label>
          <input type="password" class="form-control" name="nationality" placeholder="nationality" value="{!! $profile ->nationality !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Confirm Password<span class="text-danger">*</span></label>
          <input type="password" class="form-control" name="" placeholder="Nationality" value="{!! $profile ->nationality !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Nationality<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="nationality" placeholder="Nationality" value="{!! $profile ->nationality !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

           <div class="col-md-4 mb-3">
          <label for="validationCustom01">Address<span class="text-danger">*</span></label>
          <input type="text" class="form-control" placeholder="Address" name="pAddress" value="{!! $profile ->p_address !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Region<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="region" placeholder="Region" value="{!! $profile ->region!!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Home Town<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="homeTown" placeholder="Home Towm" value="{!! $profile ->home_town !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Phone<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="phone" placeholder="Phone Number" value="{!! $profile ->phone !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Mobile<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="mobile" value="{!! $profile ->mobile !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

                    <div class="col-md-4 mb-3">
          <label for="validationCustom01">Previous School<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="pSchool" placeholder="Previous School" value="{!! $profile ->p_school !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Location of School<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="pLocation" placeholder="Location" value="{!! $profile ->p_location !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


           <div class="col-md-4 mb-3">
          <label for="validationCustom01">Disability<span class="text-danger">*</span></label>
          <select class="form-control" name="disability" required>
            <option value="{!! $profile -> disability !!}" selected>{{$profile -> disability}}</option>
            <option value="No">No</option>
            <option value="Yes">Yes</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Gender<span class="text-danger">*</span></label>
          <select  class="form-control" name="gender" required>
          <option value="{!! $profile -> gender !!}" selected>{{$profile -> gender}}</option>
          <option>Male</option>
          <option>Female</option>
          <option>Others</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Fee Category<span class="text-danger">*</span></label>
          <select  class="form-control" name="feeCat" required>
            <option value="{!! $profile -> fee_category !!}" selected>{{$profile -> fee_category}}</option>
            <option>Regular</option>
            <option>Fee-Paying</option>
            <option>Parallel</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Current status<span class="text-danger">*</span></label>
          <select class="form-control" name="std_status" required>
          <option value="{!! $profile -> std_status !!}" selected>{{$profile -> std_status}}</option>

          <option>Alumini</option>
          <option>Withdrawn</option>
          <option>Suspended</option>
          <option>None</option>
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


           <div class="col-md-4 mb-3">
          <label for="validationCustom01">Section<span class="text-danger">*</span></label>
            <select  class="form-control" name="section" required>
            <option value="{!! $profile -> section !!}" selected>{{$profile -> section}}</option>
            @foreach($section_list as $section)
            <option>{{$section->section_name}}</option>
            @endforeach
          </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

        </div>


        
        <span>Parental / Guardian Information</span><hr>
        <div class="form-row">
          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Title<span class="text-danger">*</span></label>
            <select name="title" class="form-control" required>
            <option value="{!! $profile -> title !!}" selected>{{$profile -> title}}</option>
              <option>Mr.</option>
              <option>Mrs.</option>
              <option>Miss.</option>
              <option>Others</option>
            </select>
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>


          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Surname<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="gSurName" placeholder="Surname" value="{!! $profile ->g_surName !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">First Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="gFName" placeholder="First Name" value="{!! $profile ->g_fname !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Occupation<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="occupation" placeholder="Occupation" value="{!! $profile ->occupation !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

        </div>

      
      <span>Contact Information (Parent/Guardian)</span><hr>
      <div class="form-row">

        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Postal Address<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="gpAddress" placeholder="Postal Address" value="{!! $profile ->gp_address !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Postal Region<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="pRegion" placeholder="Postal Region" value="{!! $profile ->p_region !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Phone Number<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="gmobile" placeholder="Phone Number" value="{!! $profile ->g_mobile !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>

          <div class="col-md-4 mb-3">
          <label for="validationCustom01">Email<span class="text-danger">*</span></label>
          <input type="email" class="form-control" name="gmail" placeholder="Email" value="{!! $profile ->g_mail !!}">
          <div class="valid-feedback">
            Looks good!
          </div>
          </div>
      </div>

      <div class="form-group">
            <button class="btn btn-primary btn-lg">Save</button>
       </div>

    </form>

  </div>

  <div class="col-4">

    @include('updates.studentsimpleprofile')

  </div>
  </div>
    
  </div>

  
</div>
@endsection