<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>


<style type="text/css">
  .pagination li {
  display:inline-block;
  padding:5px;
}

</style>

        @if(count($dashboard) > 0)
          @foreach ($dashboard as $msg)

   <div id="test-list">       
    <ul class="list">
  <li class="list-group-item"><p class="name"> Title: {{$msg -> title}} | {{$msg -> deadline}}<br>
    {{$msg->message}}</p></li>
    </ul><ul class="pagination"></ul>
  </div>

  @endforeach
  @endif

  <script type="text/javascript">
    var monkeyList = new List('test-list', {
  valueNames: ['name'],
  page: 3,
  pagination: true
});

  </script>
    
      