

<ul class="list-group">
  <li class="list-group-item active">Expense (<a href="/dashboard/expenses" style="color: white">{!!$counting!!}</a>)</li>
  @foreach($expenses as $expenses)
  <li class="list-group-item">Expenses Type: {{$expenses->expense_name}} , From: {{$expenses->expense_purchased_from}}<br><br>
  	@if($expenses->expense_status == "Pending")
    <span><a href="/edit/expenses/{!! $expenses -> id!!}" class="custom-badge status-orange">{{$expenses->expense_status}}</a></span></li>
    @else
    <span><a href="/edit/expenses/{!! $expenses -> id!!}" class="custom-badge status-blue"> {{$expenses->expense_status}}</a></span></li>
    @endif
  @endforeach
</ul>