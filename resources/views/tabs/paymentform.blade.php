<div class="content" style="margin-bottom: 50px">
  <div class="page-title">Enter Payment Details</div>
<div class="form-group">

 {{ Form::open(array('url' => 'dashboard/student/pay')) }}
     
    <div class="form-group">
     <label> Student ID</label>
      <input type="text" list="staffid" class="form-control" name="student_id" class="form-control" required>
      <datalist id="staffid"> 
      @foreach($studentindex as $index)
      <option value="{!!$index->std_id!!}">{{$index->std_id}}</option> 
      @endforeach
      </datalist>
    </div>

      <div class="form-group">
      <label for="Name">Fee Type</label>
      <select name="feeType" class="form-control" style="width: 100%" id="studentfields" required>
        <option value="Fees">Fees</option>
      </select>
      </div>

      <div class="form-group">
      <label>Current Level</label>
      <select name="current_year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="" disabled selected>Select your option</option>
        @foreach($level_list as $settings)
        <option value="{!! $settings->level_name !!}">{{$settings->level_name}}</option>
        @endforeach
      </select>
    </div>

      <div class="form-group">
      <label>Academic Year</label>
      <select name="year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="" disabled selected>Select your option</option>
        @foreach($academics as $settings)
        <option value="{!! $settings->academic_year !!}">{!! $settings->academic_year !!}</option>
        @endforeach
      </select>
      </div>

      <div class="form-group">
      <label>Semester</label>
      <select class="form-control"  style="width: 100%" id="studentfields" name="semester" required>
        <option value="" disabled selected>Select your option</option>     
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
     </div>

     <div class="form-group">
      <label for="Name">Expected Amount</label>
      <select name="amount_expected" class="form-control" style="width: 100%" id="studentfields">
        <option value="" disabled selected>Select your option</option>
        @foreach($feesettings as $settings)
        <option value="{!! $settings->setting_fee_amount!!}">GH₵ {{$settings->setting_fee_amount}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>Amount Paid</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">GH₵</span>
        </div>
        <input type="text" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)" required="">
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Paid By</label>
      <input type="text" name="paid_by" title="Paid by" class="form-control" required>
    </div>

      <button class="btn btn-primary" name="pay">Make Payment&nbsp;&nbsp;<i class="fas fa-dollar-sign"></i></button>

      
{{ Form::close() }}


</div>

</div>