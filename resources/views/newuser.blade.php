<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Adorable E-System</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

     <link href="{{ asset('css/registerpage.css') }}" rel="stylesheet">



    <style>


    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">

<p style="font-size: 30px; color: #ffffff; margin-top: 40px">New? Enjoy Our E-System Experience</p>


  <div style="width: 400px; height: 440px; background-color: #ffffff; margin: 0px auto; padding: 50px 30px 30px 30px; margin-top: 30px" >
    
{{ Form::open(array('url' => 'newuser/submit')) }}

  @include('inc.errorfile')

  <input style="width: 100%; background-position: 10px 10px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;" type="text" name="username" id="userInput" placeholder="Username" title="Enter Username" required>

  <input type="email" name="email" id="myInput" placeholder="Email, eg. esyem@web.in" title="Enter a valid Email" required>

  <input type="password" name="password" id="myInput" placeholder="Enter Password" title="Password" required>

<div >
  By clicking Agree & Join, you agree to the E-system <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.
</div>
  <button class="btn btn-primary btn-lg btn-block" onclick="setuser()" style="margin-top: 15px">Agree & Join</button><hr style="margin-top: 30px">

  <p style="margin-top: 15px">Already on E-system? <a href="/"><b style="font-size: 16px">Sign in</b></a><br> </p>

{{ Form::close() }}

  </div>

  <footer class="mastfoot mt-auto" style="background-color: #ffffff;  width: 100%; height: 50px; padding-top: 13px; position: fixed;left: 0; bottom: 0"  >
    <div>
© 2020 &nbsp;&nbsp;&nbsp;&nbsp; About &nbsp;&nbsp;&nbsp;&nbsp; User Agreement &nbsp;&nbsp;&nbsp;&nbsp; Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp; Cookie Policy &nbsp;&nbsp;&nbsp;&nbsp; Copyright Policy &nbsp;&nbsp;&nbsp;&nbsp; Brand Policy &nbsp;&nbsp;&nbsp;&nbsp; Guest Controls &nbsp;&nbsp;&nbsp;&nbsp; Community Guidelines
    </div>
  </footer>
</div>
</body>
</html>