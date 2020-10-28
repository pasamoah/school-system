 
@extends('layout.app')



@section('content')

<style>
.tab {
  overflow: hidden;
  border: none;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ffffff;
  border-bottom:3px solid #4CAF50;

}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 4px 8px;
  border-top: none;
}
</style>



<div style="margin-left: 10px; margin-bottom: 180px; margin-top: 20px">

  <div style="margin-left: 22px">@include('inc.formerror')</div>


<div class="tab">
  <button class="active" onclick="openCity(event, 'School')"><small>SCHOOL INFORMATION</small></button>
  <button class="tablinks" onclick="openCity(event, 'fee')"><small>FEE SETTINGS</small></button>
  <button class="tablinks" onclick="openCity(event, 'salaries')"><small>SALARIES</small></button>
  <button class="tablinks" onclick="openCity(event, 'account')"><small>ACCOUNTS</small></button>
  <button class="tablinks" onclick="openCity(event, 'courses')"><small>COURSES</small></button>
</div>

<div id="School" class="tabcontent" style="display:block" >
@include('settings.schoolsetup')
</div>

<div id="fee" class="tabcontent">
@include('settings.feesettings')
</div>

<div id="salaries" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="account" class="tabcontent">
  <h3>accounts</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="courses" class="tabcontent">
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</div>


@endsection