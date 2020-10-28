@extends('layout.app')



@section('content')

<div class="content">
	<div class="">
	  @include('inc.errorfile')
	    <span><h4 class="page-title">Add Assignment</h4></span>
	    <span style="float: right;"><a href="/dashboard/all-assignments" class="btn btn-outline-primary"> All Assignments</a></span>
	</div>

	

	<div style="margin:0 auto; width: 50%">
	<form action="/edit/add-assignment/{!! $assignment->id !!}" method="POST" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
		<label>Course Code</label>
		<input type="text" name="ass_course_code" class="form-control" value="{!!$assignment->ass_course_code!!}">
	</div>

	<div class="form-group">
		<label>Course Name</label>
		<input type="text" name="ass_course_name" class="form-control" value="{!!$assignment->ass_course_name!!}">
	</div>

	<div class="form-group">
		<label>Level</label>
		<input type="text" name="ass_course_level" class="form-control" value="{!!$assignment->ass_course_level!!}">
	</div>

	<div class="form-group">
		<label>Upload assignment file</label>
		<input type="file" name="ass_file" class="form-control">
	</div>
	<div>
		<button class="btn btn-primary btn-lg">Save Changes</button>
	</div>
	</form>
	</div>

</div>

@endsection