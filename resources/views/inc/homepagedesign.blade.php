<div style="margin-top: 70px">
	<p style="font-size: 32px; font-weight: 100">Looking For The Finest School Management Software?</p>
	<div style="font-size: 18px">Try The Best E-Management System.</div><br>

@if($user -> isEmpty())
<button class="btn btn-primary btn-lg" onclick="location.href='/register';">Get Started</button>
</div>
@else
<button class="btn btn-primary btn-lg" onclick="location.href='/dashboard';">Dashboard</button>
</div>
@endif
