
@extends('layout.app')


@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/summernote/dist/summernote-bs4.css')}}">
  <div class="content">

    

    <div style="font-size: 18px">Add New Question</div>
    @include('inc.errorfile')
    <form>
      <label for="inputPassword3" class="col-sm-2 col-form-label">Import Questions</label>
      <input type="file" name="">
    </form>
    <hr>
    @include('inc.errorfile')

  <form method="post" action="{{URL::to('/add-new-question')}}">
    @csrf

  <input type="text" name="subject_code" value="{!!$question->course_code!!}" hidden="">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Question</label>
    <div class="col-sm-10">
      <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter Question" name="question_title"></textarea>
    </div>
     </div>



   <div style="background-color: #ffffff; padding: 20px">
    <span style="font-size: 20px;">Answer Options</span>

 
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Option A</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Answer for A" name="answer_a">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Option B</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Answer for B" name="answer_b">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Option C</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Answer for C" name="answer_c">
    </div>
    </div>

      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Option D</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Answer for D" name="answer_d">
    </div>
    </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Option E</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Answer for E" name="answer_e">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Best Answer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Best Answer" name="Question_anser">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label text-primary">Mark for Answer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="eg. 3" name="Question_score">
    </div>
  </div>
   </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

</div>


    <script src="{{ asset('assets/plugins/summernote/dist/summernote-bs4.min.js')}}"></script>
@endsection