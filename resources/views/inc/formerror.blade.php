@if(session('status'))

<div class="alert alert-success">
  {{session('status')}}
</div>
@endif


@if(count($errors) > 0)
@foreach($errors-> all() as $error)
<div style="color: red; font-size: 12px"">
	{{$error}}
</div>



@endforeach
@endif