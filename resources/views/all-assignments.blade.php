@extends('layout.app')



@section('content')

<div class="content">
              @if($assignment->isEmpty())
                <div>No Assignment Created, <a href="/dashboard/assignment">Add New</a></div>
                @else
                <div class="row">
                    <div class="col-sm-12">
                        <span><h4 class="page-title">Assignment</h4></span>
                        <span style="float: right; margin-bottom: 12px "><button class="btn btn-primary btn-rounded">
                          Add New
                        </button>
                      </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="activity">
                            <div class="activity-box">
                                <ul class="activity-list">
                                  @foreach($assignment as $assign)
                                    <li>
                                        <div class="activity-user">
                                            <a href="/uploads/{!!$assign->ass_file!!}" title="Download" data-toggle="tooltip" class="avatar">
                                                D
                                            </a>
                                        </div>
                                        <div class="activity-content">
                                            <div class="timeline-content">
                                                <a href="#" class="name">Course code</a>| 
                                                <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                                                {!!$assign->ass_course_code!!} - <a href="#">{!!$assign->ass_course_name!!}</a>
                                                <span class="time">{{$assign -> created_at->diffForHumans()}} | <a href="/assignment/edit/{!!$assign->id!!}"> <i class="fa fa-pencil m-r-5"></i> Edit</a> </span>
                                            </div>
                                        </div>
                    <a class="activity-delete" href="/delete/assignment/{!!$assign->id!!}" title="Delete">&times;</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

@endsection