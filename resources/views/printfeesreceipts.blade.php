@extends('layout.app')



@section('content')

<style type="text/css">
    @media print{
        body * {
            visibility: hidden;
            width: 100%;
        }

        #printarea, #printarea * {
            visibility: visible;
        }

        #printarea{
            margin  0;
            color: #000;
            background-color: #ffffff;
        }

        #mainpage{
            width: 100%;
            margin-right: 300px;
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
                <div class="row" id="mainpage">
                    <div class="col-md-12">
                        <div class="card" id="mainpage">
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
                                            <h3 class="text-uppercase">Invoice #INV-{{$payment_inf -> payment_id }}</h3>
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
                          <h5><strong>{{$student_info -> f_name }} {{$student_info -> surname }}</strong></h5>
                        </li>
                        <li><span>{{$student_info -> Programme }}</span></li>
                        <li>{{$student_info -> std_id }}</li>
                        <li>Level: {{$student_info -> c_level }}</li>
                        <li>{{$student_info -> paddress }}</li>
                        <li><a href="#">{{$student_info -> f_email }}</a></li>
                      </ul>
                    
                                    </div>
                                    <div class="col-sm-6 col-lg-6 m-b-20">
                    <div class="invoices-view">
                      <span class="text-muted">Payment Details:</span>
                      <ul class="list-unstyled invoice-payment-details">
                        <li>
                          <h5>Total Due: <span class="text-right">{{$payment_inf->amount_expected}}</span></h5>
                        </li>
                        <li>Academi year: <span>{{$payment_inf->year}}</span></li>
                        <li>Semester: <span>{{$payment_inf->semester}}</span></li>
                        <li>Fee Category <span>{{$payment_inf->fee_type}}</span></li>
                        <li>paid by: <span>{{$payment_inf->paid_by}}</span></li>
                      </ul>
                    </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>DESCRIPTION</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>{{$payment_inf->fee_type}}</td>
                                                <td>GHS {{$payment_inf->amount}}</td>
                                            </tr>
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
                                                                <td class="text-right">GHS {{$payment_inf->amount}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax: <span class="text-regular"></span></th>
                                                                <td class="text-right">None</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td class="text-right text-primary">
                                                                    <h5>GHS {{$payment_inf->amount}}</h5>
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