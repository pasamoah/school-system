

<div style="margin-left: 8px">
 <p style="font-size: 20px">Recent Payment</p>

 <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">

<table id="tableData" class="table table-bordered table-striped table-sm">
          <thead>
    <th>Student ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th width="100px"> Last Payment</th>
    <th>Action</th>
  </thead>

  <?php $__currentLoopData = $recentpayment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($recent -> std_id); ?></td>
    <td><?php echo e($recent -> f_name); ?></td>
    <td><?php echo e($recent -> surname); ?></td>
    <td><?php echo e(\Carbon\Carbon::parse($recent->created_at)->diffForHumans()); ?></td>
    <td style="padding-left: 30px">
    <a href="<?php echo e(URL::to('/editpayment/print/' . $recent -> id .'/'. $recent->student_id)); ?>" class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i></a>
    </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
        </table>
        </div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="paging.js"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
            });
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/tabs/paymentlist.blade.php ENDPATH**/ ?>