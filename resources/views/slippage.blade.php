@extends('layout.app')

@section('content')

<script type="text/javascript">
	
	$('.alert').alert()
</script>
<div class="content">

<div class="container-fluid" style="margin-bottom: 120px">
<div class="list-group">

	@if($staffslipmonth -> isEmpty())

	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Y'ello! </strong> No Salary recorded for this month
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
	</div>

    @endif



<div class="row">
        <div class="col-sm-5 col-4">
            <h4 class="page-title">Payslip</h4>
        </div>
        <div class="col-sm-7 col-8 text-right m-b-30">
            <div class="btn-group btn-group-sm">
                <button class="btn btn-white">CSV</button>
                <button class="btn btn-white">PDF</button>
                <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
            </div>
        </div>
 </div>


	@foreach($staffslipmonth as $slip)
  <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h3 style="text-transform: uppercase; font-weight: 100" class="mb-1">PAYSLIP FOR THE MONTH OF {{ $slip -> salary_month}}</h3>
      <small>{{ \Carbon\Carbon::parse($slip->created_at)->diffForHumans() }}</small>
    </div>
    <p class="mb-1">
    	@foreach($schoolinfo as $schoolinfo)
    	{{$schoolinfo->school_name}}<br>
		{{$schoolinfo->school_address}}<br>
		{{$schoolinfo->school_district}}<hr style="background-color: #ffffff">
		@endforeach

		<b style="font-size: 15px;text-transform: uppercase; font-weight: 100"><a href="/staff/{!!$slip -> staff_id !!}">{{ $slip -> firstname_staff}} {{ $slip -> lastname_staff}}</a></b><br>
		{{ $slip -> designation_staff}}<br>
		Employee ID: FT-{{ $slip -> staff_id}}<br>
		Joining Date: {{ $slip -> joining_date}}
    </p>
    <small>PAYSLIP #49029</small>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col" style="margin-top: 10px">
    	<h3>Earnings</h3>
		 <ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Basic Salary
		    <span class="">GH¢ {{ $slip -> basic_salary}}</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    House Rent Allowance (H.R.A.)
		    <span class="">GH¢ {{ $slip -> hra}}</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Conveyance
		    <span class="">GH¢ {{ $slip -> Conveyance}}</span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		   	Other Allowance(Allowance, medical, DA, Others)
		    <span class="">GH¢ <?php echo (($slip -> allowance)+($slip -> medical_allowance)+($slip -> da)+($slip -> others)); ?></span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		    Total Earnings
		    <span class="">GH¢ <?php echo (($slip -> allowance)+($slip -> medical_allowance)+($slip -> da)+($slip -> others)+($slip -> basic_salary)+($slip -> hra)+($slip -> Conveyance)); ?></span>
		 </li>
		</ul>
    </div>
    <div class="col" style="margin-top: 10px">
      <h3>Deductions</h3>
		 <ul class="list-group">
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Tax Deducted at Source (T.D.S.)
		    <span class="" >GH¢ {{ $slip -> tds}}</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    Provident Fund
		    <span class="" > GH¢ {{ $slip -> pf}}</span>
		  </li>
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    ESI
		    <span class="" >GH¢ {{ $slip -> esi}}</span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		   	other Deduction ( Loans, Leave, Prof. Tax, etc) 
		    <span class="" >GH¢ <?php echo (($slip -> leave)+($slip -> ptax)+($slip -> labour_welfare)+($slip -> n_other)); ?></span>
		 </li>
		 <li class="list-group-item d-flex justify-content-between align-items-center">
		    Total Deductions
		    <span class="" >GH¢ <?php echo (($slip -> leave)+($slip -> ptax)+($slip -> labour_welfare)+($slip -> n_other)+($slip -> tds)+($slip -> pf)+($slip -> esi)); ?></span>
		 </li>
		</ul><br>

		<small style="font-size: 18px; font-weight: 700">Net Salary: GH¢ {{ $slip -> net_salary}} </small>
    </div>
  </div>
  @endforeach
 </div>





</div>
	
</div>



@endsection

