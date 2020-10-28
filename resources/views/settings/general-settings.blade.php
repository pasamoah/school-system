@include('settings.setting-header')
<div class="page-wrapper">
<div class="content">
	<div class="col-sm-5 col-5">
                        <h4 class="page-title">Basic Settings</h4>
                        @include('inc.errorfile')
                    </div>
	<form method="POST" action="{{URL::to('savefee')}}" enctype="multipart/form-data">
		@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Academic Year</label>
      <input type="text" class="form-control" name="setting_fee_academics" placeholder="eg. 2019-2020" >
    </div>
    <div class="form-group col-md-6">
      <label for="">Semester or Term</label>
      <input type="text" name="setting_fee_semester" class="form-control" placeholder="Semester(1, 2, 3) or First Term, Second Term etc">
    </div>
  </div>
  <div class="form-group">
    <label for="">Creat Class Group</label>
    <input type="text" class="form-control" name="setting_fee_level" placeholder="Level 100 or level 1 ">
  </div>
  <div class="form-group">
    <label for="">Create Payments Categories</label>
    <input type="text" class="form-control" name="setting_fee_type" placeholder="School Fees, Exams, PTA, etc">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Create Fee Amounts</label>
      <input type="text" class="form-control" name="setting_fee_amount">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
</div>

<div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- settings23:11-->
</html>