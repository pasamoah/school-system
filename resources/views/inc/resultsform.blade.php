@extends('layout.app')
@section('content')

<div class="content">


<div class="container-fluid">
	
    <div class="page-title">
        <h4>Add Result Reord</h4>
    </div>

    @include('inc.errorfile')
               
	<div class="row">

		<div class="col">
			<form method="POST" action="{{URL::to('/student/results/slip')}}">

				@csrf
			  <div class="form-group">
			    <label for="formGroupExampleInput">Student ID</label>
			    <select class="form-control" name="student_results_id" required="">
			    	<option selected="">Select Student ID</option>
			    	@foreach($students as $std)
			    	<option>{{$std->std_id}}</option>
			    	@endforeach
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="">Subject</label>
			    <input type="text" class="form-control" id="" placeholder="Subject" name="subject">
			  </div>

			  <div class="form-group">
			    <label for="">Class Score</label>
			    <input type="text" class="form-control" id="" placeholder=" Out of 30%" name="class_mark">
			  </div>

			  <div class="form-group">
			    <label for="">Exams Score</label>
			    <input type="text" class="form-control" id="" placeholder=" Out of 70%" name="exams_mark">
			  </div>



			  <div class="form-group">
			    <label for="" hidden="">Remarks</label>
			    <input type="text" class="form-control" id="" placeholder="Good, Excellent, etc" name="remark" hidden="">
			  </div>

				<div class="form-group">
					<select name="academic_year" class="form-control">
		              @foreach($academics as $feesettings)
		              <option value="{!! $feesettings-> academic_year !!}">{{$feesettings-> academic_year}}</option>
		              @endforeach
		            </select>
				</div>

				<div>
					<select class="form-control" name="semester">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div><br>

			    <input type="text" class="form-control" id="" value="{!! Auth()->user()->name !!}" hidden="" name="teacher_name">


			  <div class="form-group">
			    <button class="btn btn-primary btn-lg">Save</button>
			    </div>

			    
			    

			</form>
			
		</div>


		<div class="col">
			

			<div style="background-color: #ffffff; padding: 15px; border-left: 4px solid #009efb">
			  <h4 class="alert-heading">UPLOAD RESULT</h4>
			  <p>Do not make changes to the Template  file. It will prevent the system from successfully uploading student results.
			  </p>
			  <hr>
			  <p class="mb-0">
			  	Upload Student results in CSV format.
			Click <a href="/uploads/results/results.csv"> Here</a> to dowload Template file.
			  </p>
			</div>
			
			<div style="margin-top: 12px">
				<form method="POST" action="{{URL::to('importdata')}}" enctype="multipart/form-data">

     		@csrf
     		<div class="form-group">
			<input type="file" name="file" class="form-control">
			</div>
			  

			  <div class="form-group">
			  	<button class="btn btn-outline-primary btn-sm">Upload</button>
			  </div>

			</form>
			</div>

		</div>
		
	</div>
	
</div>
	
</div>

@endsection