
@extends('layout.app')


@section('content')
  <div class="content">

    <div style="font-size: 18px">Register Course</div><hr>
    @include('inc.errorfile')

  <form method="post" action="{{URL::to('/add-new-exams')}}">
    @csrf
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Coures Name" name="course_name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Course Code</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Course Code" name="course_code">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Course Master</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Course Master" name="course_lecturer">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Academic Year</label>
    <div class="col-sm-10">
      <select class="form-control" name="course_academic_year">
        <option value="" disabled selected>Select your option</option>
        @foreach($academics as $settings)
        <option value="{!! $settings->academic_year !!}">{{$settings->academic_year}}</option>
        @endforeach
      </select>
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Semester</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Semester" name="course_semester">
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