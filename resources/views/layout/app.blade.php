<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Adorable E-system</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    @foreach($schoolinfo as $schoolinfo)
    <link rel="shortcut icon" type="image/x-icon" href="/uploads/{!! $schoolinfo->school_logo !!}" style="width: 30px; height: 45px">
    @endforeach
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullcalendar.min.css') }}">
    <meta name="_token" content="{{csrf_token()}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fullcalendar.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body style="margin-bottom: 80px">
@include('inc.navbar')


	<div style="float: left;">
  	@include('inc.sidebar')
  	</div>

<div class="page-wrapper" id=app>
  @yield('content')

</div>
 


 <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fullcalendar.js')}}"></script>
</body>


<!-- Footer -->
  <footer class="mastfoot mt-auto" style="background-color: #ffffff;  width: 100%; height: 50px; position: fixed;left: 0; bottom: 0; margin-top: 15px">
    <div style="float: right; margin-right: 20px; text-align: center; padding: 12px">
    <div class="inner">
      <p style="color: #000">© 2019 - <script>document.write(new Date().getFullYear())</script> | <a href="#" style="color: #000"><b> Adorable Systems Incorporation</b> </a>, by <a href="https://twitter.com/adorablegh"><b style="color: #000">@MeetAdorable</b></a>.</p>
    </div>
  </div>
  </footer>
 



</html>
