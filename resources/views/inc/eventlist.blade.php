          
	
		<div style="font-size: 18px; font-weight: 600; margin-bottom: 10px; border-left: 3px solid #4CAF50 ">&nbsp;&nbsp;NOTICE BOARD</div>

		<div id="eventlistview">
          @if(count($msgevents) > 0)
          @foreach ($msgevents as $msg)
		<div class="list-group-item list-group-item-action flex-column align-items-start">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1"><small>
		      	<label class="text-muted" style="border-radius: 30px">{{$msg -> title}}</label></small>
		     </h5>
		      <small class="text-muted">Created: {{$msg -> created_at->diffForHumans()}},  by <a href=""> <?php echo "@";?>{{$msg -> username}}</a></small>
		    </div>
		    <p class="mb-1">
		    	<samll style="font-family: Candara; font-size: 15px">{!!substr($msg -> message,0,120)!!} [...]</small> <a href="" data-toggle="modal" data-target="#readmore">Read More</a>
		    </p>
		    <small class="text-muted">
		    	
		    	<i class="fa fa-calendar" title="Event Created at {!!$msg->created_at!!}"></i> &nbsp; Event Date: {!!$msg -> deadline!!}&nbsp;&nbsp;&nbsp;&nbsp; | <a href="/event/edit/{!! $msg->id !!}" data-toggle="modal" title="Edit" class="eventinfo" data-id="{{ $msg->id }}" data-token="{{ csrf_token() }}"><i class="fa fa-pencil-square-o"></i></a> | <a href="/delete/{!! $msg -> id !!}" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a> 
		    </small><hr>
		 </div>
        @endforeach
        @endif

        {!! $msgevents->links() !!}


	</div>
