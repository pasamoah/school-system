@if(session('status'))

<div class="alert alert-primary alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                              {!! session('status') !!}
                                        </div>
                                    </div>
@endif


@if(count($errors) > 0)
@foreach($errors-> all() as $error)
<div class="alert alert-danger alert-dismissible show fade">
	{{$error}}
</div>



@endforeach
@endif