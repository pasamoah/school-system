@extends('layout.app')



@section('content')

<style type="text/css">
  .flex{
    display: flex;
    margin-top: 100px;
  }
</style>

<div class="content">

<div>
  <span class="page-title">Fee collection</span>
  <span style="float: right; margin-right: 100px"><a href="/payments/payment-list" class="btn btn-success btn-lg">Payment List</a></span>

  <span style="float: right; margin-right: 20px"><a href="/payments/expenses" class="btn btn-primary btn-lg">Add Expenses</a></span>
</div>


<div class="flex">
    <div class="col">
      @include('tabs.paymentlist')
    </div>
    <div class="col">
      @include('tabs.paymentform')
    </div>
</div>


</div>


@endsection