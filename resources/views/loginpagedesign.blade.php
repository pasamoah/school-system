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

     <link href="{{ asset('css/app.css') }}" rel="stylesheet">



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
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Adorable E-system</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <div style="width: 500px; height: 500px; background-color: #ffffff; margin: 0px auto; padding: 30px 30px 30px 30px">
    
<form class="form-group" style="margin-top: 50px">

  <input type="text" name="email" id="myInput" placeholder="Email or Username" title="Enter Email or Username" required>

  <input type="password" id="myInput" placeholder="Password" name="password" title="Enter Email or Username" required>

<div class="Custom-control-checkbox">
  <input type="checkbox" name="" value="Remember me" class="Custom-control-input" id="defaultUnchecked"><label class="Custom-control-label" for="defaultUnchecked">Remember Me</label>
</div>
  <button class="btn btn-primary btn-lg btn-block" style="margin-top: 15px">Sign In</button><hr style="margin-top: 30px">
  @if (Route::has('password.request'))
  <a href="{{ route('password.request') }}"><b style="font-size: 16px">Forgot password?</b></a>
  @endif
  <p style="margin-top: 15px">New to E-sytem? <a href="/newuser"><b style="font-size: 16px">Join now</b></a><br> </p>

  




</form>

  </div>



  

 

  <footer class="mastfoot mt-auto" >
    <div class="inner">
      <p style="color: #000">© 2019 - <script>document.write(new Date().getFullYear())</script> | <a href="#" style="color: #000"><b> Adorable Systems Incorporation</b> </a>, by <a href="https://twitter.com/adoragh"><b style="color: #000">@MeetAdorable</b></a>.</p>
    </div>
  </footer>
</div>
</body>
</html>