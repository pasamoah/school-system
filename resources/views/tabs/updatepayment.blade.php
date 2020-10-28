<h3>Edit Payment Details</h3>
<div class="form-group">

 <form method="POST" action="{{URL::to('/dashboard/update/payment' . '/' . $p_details->id)}}">

  @csrf
	   
    <div class="form-group">
     <label> Student ID </b></label>
      <input type="text" class="form-control" value="{!! $p_details->student_id !!}" name="student_id" required readonly="" />
    </div>

      <div class="form-group">
      <label for="Name">Fee Type</label>
      <select name="feeType" class="form-control" style="width: 100%" id="studentfields" required>
        <option value="{!! $p_details->fee_type !!}">{{$p_details->fee_type}}</option>
        @foreach($feesettings as $settings)
        <option value="{!! $settings->setting_fee_type !!}">{{$settings->setting_fee_type}}</option>
        @endforeach
      </select>
      </div>

      <div class="form-group">
      <label>Current Level</b></label>
      <select name="current_year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="{!! $p_details->current_year !!}">{{$p_details->current_year}}</option>
        @foreach($feesettings as $settings)
        <option value="{!! $settings->setting_fee_level !!}">{{$settings->setting_fee_level}}</option>
        @endforeach
      </select>
    </div>

      <div class="form-group">
      <label>Academic Year</b></label>
      <select name="year" class="form-control"  style="width: 100%" id="studentfields" required>
        <option value="{!! $p_details->year !!}">{{$p_details->year}}</option>
        @foreach($feesettings as $settings)
        <option value="{!! $settings->setting_fee_academics !!}">{{$settings->setting_fee_academics}}</option>
        @endforeach
      </select>
      </div>

      <div class="form-group">
      <label>Semester</b></label>
      <select class="form-control"  style="width: 100%" id="studentfields" name="semester" required>
        <option value="{!! $p_details->semester !!}">{{$p_details->semester}}</option>     
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
     </div>

     <div class="form-group">
      <label for="Name">Expected Amount</label>
      <select name="amount_expected" class="form-control" style="width: 100%" id="studentfields">
        <option value="{!! $p_details->amount_expected !!}">GH₵ {{$p_details->amount_expected}}</option>
        @foreach($feesettings as $settings)
        <option value="{!! $settings->setting_fee_amount!!}">GH₵ {{$settings->setting_fee_amount}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>Amount Paid</b></label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">GH₵</span>
        </div>
        <input type="text" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)" required="" value="{!! $p_details->amount !!}">
        <div class="input-group-append">
          <span class="input-group-text">.00</span>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Paid By</b></label>
      <input type="text" name="paid_by" title="Paid by" value="{!! $p_details->paid_by !!}" class="form-control" required>
    </div>

      <button class="btn btn-primary btn-bg" name="pay">Save</button>

      
</form>


</div>
