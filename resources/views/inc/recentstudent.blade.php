
<style type="text/css">
	
</style>


<div style="margin-top: 15px">

<span style="margin: 5px; font-size: 15px; background-color: #4CAF50; width: 120px; padding: 10px; color: #ffffff">Most Recent</span>

@foreach ($studentrecent as $mostrecent)
<a href="/users/{!! $mostrecent -> std_id !!}" style="text-decoration:none; color: #000000">
<div id="designframe" style="display: flex; background-color: #ffffff; padding: 10px; border: 0.2px solid #c4c4c2; margin-top: 8px" >

	<img src="/uploads/{{$mostrecent->image}}" width="50" height="50" style="border-radius: 10px">
	<ul style="list-style: none;" class="d-flex w-100 justify-content-between">
		<li><span>{{$mostrecent->f_name}} {{$mostrecent->surname}}</span>
			<span class="badge badge-primary badge-pill">{{$mostrecent->std_id}}</span>
		</li>

		<li><small>{{ \Carbon\Carbon::parse($mostrecent->created_at)->diffForHumans() }}</small></li>
	</ul>

</div>
</a>

@endforeach

</div>
