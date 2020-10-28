@extends('layout.app')


@section('content')

<div class="content">
<div class="list-group" style=" margin-bottom: 50px">
  <div href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <form method="POST" action="/submit-answer/{!!$display->id!!}">
      @csrf
    <p class="mb-1">{!! $display->question_titile !!}</p>
    <fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="{!! $display->answer_a !!}">
          <label class="form-check-label" for="gridRadios1">
            [A] {!! $display->answer_a !!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="{!! $display->answer_b !!}">
          <label class="form-check-label" for="gridRadios2">
            [B] {!! $display->answer_b !!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="{!! $display->answer_c !!}">
          <label class="form-check-label" for="gridRadios2">
            [C] {!! $display->answer_c !!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="{!! $display->answer_d !!}">
          <label class="form-check-label" for="gridRadios2">
            [D] {!! $display->answer_d !!}
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="{!! $display->answer_e !!}">
          <label class="form-check-label" for="gridRadios2">
           [E]  {!! $display->answer_e !!}
          </label>
        </div>
      </div>
    </div>
  </fieldset>
    <small class="text-muted">Select The Best Answer</small>

    <div class="form-group" style="margin-top: 12px">
      <button class="btn btn-primary btn-bg">Submit</button>
    </div>
    </form>

  </div>
</div>


<a href="{{ url('<?php echo url()->current();  ?>'), ['id' => $display->next()->getKey()])}}" class="btn btn-primary">Next >></a>

  
@endsection