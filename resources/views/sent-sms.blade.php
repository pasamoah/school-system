@extends('layout.app')

@section('content')
<div class="content">
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Sent SMS</h4>
    </div>
</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="email-header">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 col-8 top-action-left">
                                        <div class="float-left">
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">All</a>
                                                    <a class="dropdown-item" href="#">None</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Read</a>
                                                    <a class="dropdown-item" href="#">Unread</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Reply</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Archive</a>
                                                    <div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Mark As Read</a>
                                                    <a class="dropdown-item" href="#">Mark As Unread</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Forums</a>
                                                    <a class="dropdown-item" href="#">Updates</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Spam</a>
                                                    <a class="dropdown-item" href="#">Trash</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">New</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Work</a>
                                                    <a class="dropdown-item" href="#">Family</a>
                                                    <a class="dropdown-item" href="#">Social</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Primary</a>
                                                    <a class="dropdown-item" href="#">Promotions</a>
                                                    <a class="dropdown-item" href="#">Forums</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-left d-none d-sm-block">
                                            <input type="text" placeholder="Search Messages" class="form-control search-message">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-4 col-4 top-action-right">
                                        <div class="text-right">
                                            <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                            <button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-none d-md-inline-block" onclick="refresh()"><i class="fa fa-refresh"></i></button>
                                            <div class="btn-group">
                                                <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-content">
								<div class="table-responsive">
									<table class="table table-inbox table-hover">
										<thead>
											<tr>
												<th colspan="6">
													<input type="checkbox" id="check_all">
												</th>
											</tr>
										</thead>
										<tbody>
											@foreach($sent as $sent)
											<tr class="unread clickable-row" data-href="mail-view.html">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
												<td class="name">{!!$sent->sms_number!!}</td>
												<td class="subject">{!!substr($sent -> sms_message,0,60)!!}...</td>
												<td><i class="fa fa-paperclip"></i></td>
												<td class="mail-date">{{$sent -> created_at->diffForHumans()}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
                            </div>
                        </div>
                    </div>
                </div>

</div>

<script>
	function refresh(){
		$ajax({
			type: "POST",
			url: "/dashboard/sent-message",
			data: infoPo,
			success: function() {
				location.reload();
			}
		});
	}
</script>

@endsection