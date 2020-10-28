@extends('layout.app')


@section('content')
  <div class="content">
    <div class="container-fluid">

    <div class="row">
      <div class="col-4" style="text-align: center; overflow-y: scroll; height:auto;"> 
        
        <div class="card">
         <div>
           <img src="/uploads/{{$studentprofilePage->image}}" class="img-responsive" alt="{!!$studentprofilePage->image!!}" style="width: 240px; height: 240px; border-radius: 15px">
         </div>
            <div class="card-body">
            <h5 class="card-title" style="text-transform: uppercase; font-weight: 900; font-family: candara">{{ $studentprofilePage->surname }} {{ $studentprofilePage->f_name }}</h5>
            <p class="card-text text-primary" style="text-transform: uppercase;">{{ $studentprofilePage->Programme }}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <a href="/profile/update/{!! $studentprofilePage -> std_id !!}" class="btn btn-dark btn-sm"><i class="fa fa-pencil-square-o"></i> UPDATE</a>
              <a href="/profile/message/{!! $studentprofilePage -> std_id !!}" class="btn btn-primary btn-sm"><i class="fa fa-paper-plane"></i> MESSAGE</a>
            </li>
            <li class="list-group-item">

              Search Academic Record
            </li>
            <li class="list-group-item">
            <form action="{{URL::to('/student/resultshow/'. $studentprofilePage->std_id)}}" method="GET" enctype="multipart/form-data">
      
             <input type="text" name="studentID" value="{!! $studentprofilePage->std_id !!}" hidden="">
            

            <select name="academic_year">
              @foreach($academics as $feesettings)
              <option value="{!! $feesettings-> academic_year !!}">{{$feesettings-> academic_year}}</option>
              @endforeach
            </select>


             <select name="semester">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>


            <button style="background-color: #ffffff; border: 1.5px solid #f1f1f1">view</button>    
            </form>
            </li>
          </ul>
          <div class="card-body">
            <a href="/dashboard" class="card-link">Back to Home</a>

          </div>
        </div>



      </div>
      <div class="col-8">

    <div style="width: 100%; background-color: #ffffff; padding: 15px;">
      <div class="page-title">
        Student Info
      </div><hr>

      <div class="form-row" style="text-align: justify;">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Full-Name:<span class="text-primary"> {{ $studentprofilePage->f_name }} {{ $studentprofilePage->surname }}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email: <span class="text-primary">{{ $studentprofilePage->f_email }}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Date of Birth: <span class="text-primary">{{ $studentprofilePage->DoB }}</span></label>
  </div>

      <div class="col-md-4 mb-3">
      <label for="validationCustom01">Address: <span class="text-primary">{{ $studentprofilePage->p_address }}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nationality: <span class="text-primary">{{ $studentprofilePage->nationality}}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Region: <span class="text-primary">{{ $studentprofilePage->region }}</span></label>
  </div>


      <div class="col-md-4 mb-3">
      <label for="validationCustom01">Full-Name:<span class="text-primary"> {{ $studentprofilePage->f_name }} {{ $studentprofilePage->surname }}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email: <span class="text-primary">{{ $studentprofilePage->f_email }}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Date of Birth: <span class="text-primary">{{ $studentprofilePage->DoB }}</span></label>
  </div>

      <div class="col-md-4 mb-3">
      <label for="validationCustom01">Address: <span class="text-primary">{{ $studentprofilePage->p_address }}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nationality: <span class="text-primary">{{ $studentprofilePage->nationality}}</span></label>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Region: <span class="text-primary">{{ $studentprofilePage->region }}</span></label>
  </div>


    </div><hr>
        
<div style="margin-top: 50px">
  <div class="page-title">
    Fee Transaction
  </div>
    @if($studentfeedetails -> isEmpty())
      <span style="margin-top: 10px">No Payments Made recently <a href="{{URL::to('/new/payment' . '/' .  $studentprofilePage->std_id)}}"> Make Payment </a></span>
    @endif

    @include('inc.errorfile')
      <div style="font-family: Candara;">

        <form style="margin-bottom: 3px" action="/fee-grouping/{!!$studentprofilePage->std_id!!}" method="GET">
          <label>Filter: </label><br>
          <span>
          <select name="academic_year" style="width: 20%; height: 28px">
          <option>2019 - 2020</option>
          </select>
          <select name="semester" style="width: 20%; height: 28px">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          </select>
          </span>

          <span><button class="btn btn-primary btn-sm">search</button></span>

          <button style="background-color: #ffffff; border: 1.5px solid #f1f1f1">PDF</button>
          <button style="background-color: #ffffff; border: 1.5px solid #f1f1f1"><i class="fa fa-print fa-lg"></i> Print</button>

          <a href="{{URL::to('/new/payment' . '/' .  $studentprofilePage->std_id)}}" style="float: right;" class="btn btn-success btn-sm"><i class="fa fa-money"></i>  Add payment</a>
        </form>

        

        <div class="list-group">
          <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Payment Transactions</h5>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
          </div>

          @foreach($studentfeedetails as $feeDetails)
          <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Academic Year: {{$feeDetails->year}} | Date: {{$feeDetails->created_at}} | Expected Fee: GHS {{$feeDetails->amount_expected}}</h5>
              <small class="text-muted"></small>
            </div>
            <p class="mb-1">
              <table class="table table-borderless">
              <tbody>
                <tr>
                  <th scope="row">
                    Fee Type:<br>
                    Narative:<br>
                    Paid by:<br>
                    Amount:<br>
                    Balance:

                  </th>
                  <td>
                    {{$feeDetails->fee_type}}<br>
                    Being Payment of {{$feeDetails->fee_type}} for <b>{{$feeDetails->year}}</b> academic year, semester <br>
                    {{ $feeDetails -> paid_by }}<br>
                    GHs {{ $feeDetails -> amount }}<br>
                    <h6 style="color: blue">GHs {{ $feeDetails -> balance }}</h6>

                  </td>
                </tr>
              </tbody>
            </table>
            </p>
            <small class="text-muted"><a href="{{URL::to('/editpayment/' . $feeDetails -> id .'/'. $feeDetails->student_id)}}">Edit Payment</a> |

              @if( $feeDetails -> status == "Full Payment"  )

                <label style="color: #2049a8">{{$feeDetails -> status}}</label>

                @endif

                @if( $feeDetails -> status == "Owing"  )

                <label style="color: #b50415">{{$feeDetails -> status}}</label>

                @endif

                @if( $feeDetails -> status == "Overpaid"  )

                <label style="color: #069941">{{$feeDetails -> status}}</label>

                @endif | <a href="{{URL::to('/editpayment/print/' . $feeDetails -> id .'/'. $feeDetails->student_id)}}"> Print Receipt </a> | <a href="/delete/payment/{!! $feeDetails->id !!}"> Delete Transaction </a>

            </small>
          </div>
          @endforeach
        </div>
    
    </div>
    </div>
</div>

      
    </div>
  </div>

  </div>
  
@endsection











