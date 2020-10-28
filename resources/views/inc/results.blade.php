
	<script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	
	<table class="table" style="width: 800px">

  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Class Mark(30%)</th>
      <th scope="col">Exams Mark  (70%)</th>
      <th scope="col">Total (100%)</th>
      <th scope="col">Remarks</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($results as $results)
    <tr>
      <th scope="row"><a href="{{URL::to('/update/results/'. $results-> id)}}">{{$results ->subject}}</a></th>
      <td>{{$results ->class_mark}}</td>
      <td>{{$results ->exams_mark}}</td>
      <td>{{$results ->total_mark}}</td>
      <td>{{$results ->remark}}</td>
    </tr>

    @endforeach
  </tbody>
</table>

<div style="margin-bottom: 50px; float: right;">
<ul class="list-group list-group-flush">
  <li class="list-group-item" style="font-size: 18px"><b>Total Score:</b> {{$Average_score}}</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>

</div>


