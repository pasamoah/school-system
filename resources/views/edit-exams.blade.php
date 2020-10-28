
@extends('layout.app')


@section('content')
  <div class="content">

    <span style="font-size: 18px">Edit Course</span>
    <span style="float: right;"><a href="/question/add/{!!$course->course_code!!}" class="btn btn-primary btn-sm">Set Questions</a></span>
    <hr>
    @include('inc.errorfile')


  <form method="post" action="{{URL::to('/add-update' . '/' . $course->course_code)}}">
    @csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Coures Name" name="course_name" value="{!!$course->course_name!!}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Course Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Course Code" name="course_code" value="{!!$course->course_code!!}">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Master</label>
    <div class="col-sm-10">
      <input type="text" value="{!!$course->course_lecturer!!}" class="form-control" id="inputEmail3" placeholder="Course Master" name="course_lecturer">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Academic Year</label>
    <div class="col-sm-10">
      <select class="form-control" name="course_academic_year">
        <option value="{!! $course->course_academic_year !!}">{{$course->course_academic_year}}</option>
        @foreach($feesettings as $settings)
        <option value="{!! $settings->setting_fee_academics !!}">{{$settings->setting_fee_academics}}</option>
        @endforeach
      </select>
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Semester" name="course_semester" value="{!!$course->course_semester!!}">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Register Course</button>
    </div>
  </div>
</form>

</div>

@endsection