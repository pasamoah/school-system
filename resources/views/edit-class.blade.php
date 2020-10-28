@extends('layout.app')


@section('content')

<div class="content">
	<div class="row">
    <div class="col-lg-8">
        @include('inc.errorfile')
        <h4 class="page-title">Edit Class</h4>
    </div>
     </div>

	<div class="container-fluid" style="width: 100%; background-color: #ffffff; padding: 10px;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)">
				<form method="POST" action="/add-programme/{!! $class_edit->id !!}">
					@csrf
					<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="class_name" required="" value="{!! $class_edit->class_name !!}">
				</div>

				<div class="form-group">
					<label>Class Numeric</label>
					<input type="text" class="form-control" name="class_numeric" value="{!! $class_edit->class_numeric !!}">
				</div>

				<div class="form-group">
					<label>Section</label>
			         <select class="form-control" name="class_section">
		                <option>{!! $class_edit->class_section !!}</option>
		                @foreach($section_list as $section_list)
		                <option value="{!! $section_list -> section_name !!}">{!! $section_list -> section_name !!}</option>
		                @endforeach
		            </select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Save</button>
				</div>

				</form>
			</div>
</div>

@endsection