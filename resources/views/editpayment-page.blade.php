@extends('layout.app')



@section('content')

<style type="text/css">
  .flex{
    display: flex;
    margin-top: 100px;
  }
</style>

<div style="margin-left: 30px; margin-bottom: 100px; margin-top: 20px">
	
<div style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%">
    <div>
      @include('tabs.updatepayment')
    </div>
</div>


</div>


@endsection