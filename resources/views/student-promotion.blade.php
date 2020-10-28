        

@extends('layout.app')


@section('content')

<div class="content">
  <div class="page-title">
    Promote Students
  </div>

  <div style="min-height: 200px; background-color: #ffffff; padding: 30px; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2)">
    <div style="font-size: 17px; margin-bottom: 5px;">
      Select Grounds
    </div><hr>
    <form method="GET" action="{{URL::to('/promotion/filter')}}">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="validationCustom01">Class</label>
      <select class="form-control" name="course">
        @foreach($class_list as $list)
          <option>{!! $list->class_name !!}</option>
          @endforeach
      </select>
      <div class="valid-feedback" >
        Looks good!
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="validationCustom02">Section</label>
       <select class="form-control" name="section">
        @foreach($section_list as $list)
          <option>{!! $list->section_name !!}</option>
          @endforeach
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div>
      <button class="btn btn-outline-primary btn-lg"> <i class="fa fa-filter"></i> Filter</button>
    </div>
  </div>
  
  
</form>

  </div>


                          <div class="table-responsive" style="margin-top: 30px; background-color: #ffffff; padding: 30px;box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2) ">

                            <div style="font-size: 17px; margin-bottom: 5px;">
                              The Next Session Was Transferred To The Students
                            </div><hr>

                            <div style="border: 1px solid #f1f1f1; border-radius: 5px;padding: 12px; margin-bottom: 5px">
                              Instructions :
                              <ul style="list-style-type: none;">
                              <li>1. The Roll field shows the previous roll and you can manually add new roll for promoted session</li>
                              <li>2. Roll number is unique, so carefully enter the roll number. Automatically generate a roll when your entered roll exists</li>
                              <li>3. For Enroll, You can select "Running Class" and "Promote To Class" same (Student will change in Session year but classes remain unchanged)</li>
                              <li>4. Please double check and Fill-up all fields carefully Then click Promotion button</li>
                             </ul>
                            </div>

                  <div>
                    @include('inc.errorfile')
                  </div>


<div style="margin-top: 12px">
  <form action="{{URL::to('/promotion')}}" method="post">
    @csrf
   <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Promotion To Level<span class="text-danger">*</span></label>
      <select name="class_level" class="form-control" id="validationCustom01" required>
        @foreach($level_list as $level_list)
        <option value="{!! $level_list -> level_name !!}">{!! $level_list -> level_name !!}</option>
        @endforeach
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Promote To Class/Programme<span class="text-danger">*</span></label>
      <select class="form-control" name="class_programe" id="inputEmail4">
        <option value="" disabled selected>Select your option</option>
        @foreach($class_list as $class_list)
        <option value="{!! $class_list -> class_name !!}">{!! $class_list -> class_name !!}</option>
        @endforeach
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Promote To Section<span class="text-danger">*</span></label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
      </div>
    </div>
  </div>

                            <table class="table table-striped custom-table mb-0 datatable" style="margin-top: 10px">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Student Number</th>
                                        <th>Guardian Name</th>
                                        <th>Mark Summary</th>
                                        <th>Fee Category</th>
                                        <th class="text-right"><input type="checkbox" name="" id="master"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($filter as $filter)
                                    <tr>
                                        <td>
                                            <a href="profile.html" class="avatar"><img src="/uploads/{{$filter->image}}" style=" border-radius: 50%;" alt="{{$filter->image}}"></a>
                                            <h2><a href="#">{{$filter->f_name}} {{$filter->surname}}<span>{{$filter->Programme}}</span></a></h2>
                                        </td>
                                        <td>{{$filter->std_id}}</td>
                                        <td>{{$filter->title}} {{$filter->g_fname}} {{$filter->g_surName}}</td>
                                        <td><a href="/users/{!! $filter->std_id !!}" class="btn btn-outline-primary btn-sm btn-rounded"><i class="fa fa-eye"></i> View</a></td>
                                        <td>{{$filter->fee_category}}</td>
                                        <td class="text-right">
                                            <input type="checkbox" id="checkItem" name="checked[]" value="{!! $filter->std_id !!}">
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <div>
                              <button class="btn btn-outline-primary btn-lg">Promotion</button>
                            </div>
                            </form>
                        </div>
    
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



  $("#master").click(function (){
    $('input:checkbox').not(this).prop('checked', this.checked)
  });

</script>
  
</div>


@endsection


