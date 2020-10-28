<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="_token" content="{{csrf_token()}}"/>
    <title>Add Customer</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <h3 class="text-center">Add Customer</h3>
    <div id="alert_box" class="alert alert-success" style="display:none"></div>
    <form id="myForm">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <button class="btn btn-success" id="ajaxSubmit">Add</button>
    </form>
</div>
<script>
    $(function() {
        $.click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('/store_customer') }}",
                method: 'POST',
                data: {
                    name: $('#name').val(),
                    email: $('#email').val(),
                },
                success: function (result) {
                    $('#alert_box').html(result.message);
                    $('#alert_box').show();
                }
            });
        });
    });
</script>
</body>
</html>