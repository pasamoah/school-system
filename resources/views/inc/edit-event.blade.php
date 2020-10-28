@extends('layout.app')
@section('content')

<div class="content">
  <div class="page-title">
    Edit Event 
  </div>
  <form method="POST" action="/dashboard/edit/{!! $event->id !!}">
    @csrf
      <div class="form-group">

        <input type="text" name="username" value="{!! Auth()->user()->name !!}" hidden="">

      </div>

      <div class="form-group">
        <label>Title</label>
          <input class="form-control" type="text" name="title" required="" value="{!! $event->title !!}">
      </div>

      <div class="form-group">
          <label>Date</label>
          <div class="cal-icon">
              <input type="text" class="form-control datetimepicker" name="deadline" required="" value="{!! $event->deadline !!}">
          </div>
      </div>

      <div class="form-group">
          <textarea class="form-control" placeholder="What's the event about?"  rows="3" cols="30" name="message">{{$event->message}}</textarea>
      </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <button class="btn btn-primary btn-lg">update</button>
          </div>
    </form>
</div>


@endsection