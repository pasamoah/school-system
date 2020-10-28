
@extends('layout.app')


@section('content')
  <div class="content">
    <h4 class="page-title">All Courses</h4> 
    @include('inc.errorfile')
  <table class="table table-striped custom-table mb-0 datatable">
  <thead>
    <tr>
      <th scope="col">Course Code</th>
      <th scope="col">Course Name</th>
      <th scope="col">Academic year</th>
      <th scope="col">Semester</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($display as $display)
    <tr>
      <th scope="row">{!! $display->course_code!!}</th>
      <td>{!! $display->course_name!!}</td>
      <td>{!! $display->course_academic_year!!}</td>
      <td>{!! $display->course_semester!!}</td>
      <td><a href="/display/exams/{!! $display->course_code!!}/{!! $display->course_semester!!}/" class="btn btn-primary btn-sm">Questions</a> </td>
      <td>
        <div class="dropdown">
      <a class="btn btn-primary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Action
      </a>

      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i>Edit</a>
        <a class="dropdown-item" href="/delete/exams/{!! $display->course_code!!}"><i class="fa fa-trash-o m-r-5"></i>Delete</a>
        <a class="dropdown-item" href="/question/add/{!! $display->course_code!!}"><i class="fa fa-users fa-fw"></i>Add Question</a>
      </div>
    </div>




      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection