<div>

<div class="d-flex justify-content-between" style="padding: 10px;">
  <div style=" font-size: 17px; height: 30px">School Report and Statistics</div>
<div>
<div class="dropdown dropdown-action">
    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href=""><i class="fa fa-pencil m-r-5"></i> Edit</a>
        <a class="dropdown-item" href="" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    </div>
</div>
</div>
</div>

<div style="font-family: Arial">
<ul class="list-group list-group-flush">
  @foreach($gender as $genderCount)
  <li class="list-group-item">{{$genderCount -> gender }} <span style="float: right">{{$genderCount -> total}}</span></li>
  @endforeach

  @foreach($class as $classCount)
  <li class="list-group-item">Level/Year: {{$classCount -> c_level }} <span style="float: right">{{$classCount -> Class_total}}</span></li>
  @endforeach


</ul>
</div>



</div>