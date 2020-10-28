@extends('layout.app')

@section('content')
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Department</h4>
                        @include('inc.errorfile')
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action = "/edit-depart/<?php echo $department_edit->id; ?>" method = "post">
                            @csrf
							<div class="form-group">
								<label>Department Name</label>
								<input class="form-control" type="text" value="{!! $department_edit-> department_name !!}" name="department_name">
							</div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="department_description">{{$department_edit-> department_description}}</textarea>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save Department</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection