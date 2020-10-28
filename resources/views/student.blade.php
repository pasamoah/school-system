@extends('layout.app')


@section('content')


<div class="content">
  <div class="page-title" style="margin-bottom: 35px">New Student
      <span style="float: right;"><a href="/student-list" class="btn btn-primary btn-rounded"><i class="fa fa-search-plus"></i> Search Student</a></span>
  </div>

@include('inc.admission_form')


</div>
@endsection
