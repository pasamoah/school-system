

  @foreach($schoolinfo as $schoolinfo)
  @endforeach

<div class="card">
  <img src="/uploads/{{$profile->image}}" alt="/uploads/{{$profile->image}}" style="width:100%; border-radius: 15px ">
  <h2>{{$profile->f_name}}<small>, {{$profile->surname}}</small></h2>
  <p class="title">{{$profile->Programme}}, {{$profile->c_level}},</p>
  <p>{{ $schoolinfo -> school_name }}</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><a href="/remove/profile/{!!$profile->std_id!!}" class="btn btn-outline-danger">Remove</a></p>
</div>