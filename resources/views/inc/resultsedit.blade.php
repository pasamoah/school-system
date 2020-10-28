@extends('layout.app')


@section('content')

<div style="margin-left: 220px">


<div class="container">

	<div style="font-family: candara; font-size: 18px; font-weight: 800"> Update {{$update->subject}} Score for {{$update->academic_year}} Academic year</div>

	<div class="row">
		<div class="col">
			@include('inc.formerror')
			<form method="POST" action = "/updateresults/<?php echo $update->id; ?>">

				@csrf
			  <div class="form-group">
			    <label for="formGroupExampleInput">Student ID</label>
			    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID" name="student_results_id" value="{!! $update-> student_results_id !!}" readonly="">
			  </div>

			  <div class="form-group">
			    <label for="">Subject</label>
			    <input type="text" class="form-control" id="" placeholder="Subject" name="subject" value="{!! $update-> subject !!}">
			  </div>

			  <div class="form-group">
			    <label for="">Class Score</label>
			    <input type="text" class="form-control" id="" placeholder=" Out of 30%" name="class_mark" value="{!! $update-> class_mark !!}">
			  </div>

			  <div class="form-group">
			    <label for="">Exams Score</label>
			    <input type="text" class="form-control" id="" placeholder=" Out of 70%" name="exams_mark" value="{!! $update-> exams_mark !!}">
			  </div>



			  <div class="form-group">
			    <label for="" hidden="">Remarks</label>
			    <input type="text" class="form-control" id="" placeholder="Good, Excellent, etc" name="remark" hidden="">
			  </div>


			    <input type="text" class="form-control" id="" value="{!! $update-> academic_year !!}" hidden="" name="academic_year">

			    <input type="text" class="form-control" id="" value="{!! Auth()->user()->name !!}" hidden="" name="teacher_name">


			  <div class="form-group">
			    <button class="btn btn-success btn-lg">Update Score</button>

			    <a href="{{URL::to('/deleteResults/'. $update-> id)}}"  class="btn btn-danger btn btn-lg" data-toggle="tooltip" data-placement="bottom" title="by clicking on Delete Mark, you will erase current score for {!! $update->subject !!}">
  				Delete Score
				</a>
			   </div>

			    
			    

			</form>
			
		</div>


		<div class="col">
			

		</div>
	
</div>

@endsection