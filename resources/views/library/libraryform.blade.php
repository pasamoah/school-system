
<div class="container-fluid" style="margin-top: 50px">
	<div class="content">
	<div class="row">
	    <div class="col-sm-5 col-5">
	        <div class="page-title">Add New</div>
	    </div>
	    <div class="col-sm-7 col-7 text-right m-b-30">
	        <a href="/dashboard/librarystore" class="btn btn-primary btn-rounded">Library</a>
	    </div>
	</div>
<div>
	<form method="POST" action="{{URL::to('addlibrary')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Book Name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="book_name" required >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Subject</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="book_subject" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Author</label>
      <input type="text" class="form-control" id="validationCustom02" name="book_writer" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Level</label>
      <input type="text" class="form-control" id="validationCustom01"  name="book_level" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">ISBN No.</label>
      <input type="text" class="form-control" id="validationCustom02" name="book_isbn" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Publishing Date</label>
      <div class="cal-icon">
      <input type="text" class="form-control datetimepicker" id="validationCustom02" name="book_date" required>
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Upload File</label>
      <div class="form-group" style="margin: 10px">
	<input type="file" name="document" class="form-control">
	</div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

  </div>

  <div class="form-group" style="margin:30px;">	
	<button class="btn btn-primary btn-lg">Save</button>

	<button class="btn btn-danger btn-lg" onclick="refresh()"><i class="fa fa-refresh"></i>&nbsp;&nbsp;Reset</button>
  </div>

	</form>
</div>

</div>

	
</div>

<script type="text/javascript">

	          function refresh() {
	          	document.getElementById('libraryform').reset();
	          }


</script>