

@extends('layout.app')



@section('content')

<style type="text/css">
    @media print{
        body * {
            visibility: hidden;
        }

        #printarea, #printarea * {
            visibility: visible;
        }

        #printarea{
            position: absolute;
            float: left;
            font-size: 30px;
            width: 1200px;
        }

    }
</style>



            <div class="content" id="printarea">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Receipt</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white">PDF</button>
                            <button class="btn btn-white" onclick="window.print()"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row custom-invoice">
                                    <div class="col-6 col-sm-6 m-b-20">
                                      @foreach($schoolinfo as $schoolinfo)
                                        <img src="assets/img/logo-dark.png" class="inv-logo" alt="">
                                        <ul class="list-unstyled">
                                            <li><b>{{$schoolinfo->school_name}}</b></li>
                                            <li>{{$schoolinfo->school_address}},</li>
                                            <li>{{$schoolinfo->school_email}}</li>
                                            <li>{{$schoolinfo->school_phone}}</li>
                                        </ul>
                                        @endforeach
                                    </div>
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Invoice #INV-265655</h3>
                                            <ul class="list-unstyled">
                                                <li>Date: <?php echo Date('d/M/Y') ?> <span></span></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6 m-b-20">
                    
                      <h5>Receipt to:</h5>
                      <ul class="list-unstyled">
                        <li>
                          <h5><strong>{{$studentprofilePage -> f_name }} {{$studentprofilePage -> surname }}</strong></h5>
                        </li>
                        <li><span>{{$studentprofilePage -> Programme }}</span></li>
                        <li>{{$studentprofilePage -> std_id }}</li>
                        <li>Level: {{$studentprofilePage -> c_level }}</li>
                        <li>{{$studentprofilePage -> paddress }}</li>
                        <li><a href="#">{{$studentprofilePage -> f_email }}</a></li>
                      </ul>
                    
                                    </div>
                                    <div class="col-sm-6 col-lg-6 m-b-20">
                    <div class="invoices-view">
                      <span class="text-muted">Payment Details:</span>
                      <ul class="list-unstyled invoice-payment-details">
                        <li>
                          <h5>Total Due: <span class="text-right"></span></h5>
                        </li>
                        <li>Academi year: <span>{{$academic_year}}</span></li>
                        <li>Semester: <span>{{$semester}}</span></li>
                        <li>Fee Category <span></span></li>
                        <li>paid by: <span></span></li>
                      </ul>
                    </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>PAY ID</th>
                                                <th>DESCRIPTION</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($studentfeedetails as $feeDetails)
                                            <tr>
                                                <td>PA-{{$feeDetails->payment_id}}</td>
                                                <td>{{$feeDetails->fee_type}}</td>
                                                <td>GHS {{$feeDetails->amount}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="row invoice-payment">
                                        <div class="col-sm-7">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="m-b-20">
                                                <h6>Total due</h6>
                                                <div class="table-responsive no-border">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal:</th>
                                                                <td class="text-right">GHS  {!!$sumFee!!}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Expected Amount: <span class="text-regular"></span></th>
                                                                <td class="text-right">{!!$expected!!}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Arrears:</th>
                                                                <td class="text-right text-danger">
                                                                    <h5>GHS {!!$arrears!!} </h5>
                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-info">
                                        <h5>Other information</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien interdum vel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection