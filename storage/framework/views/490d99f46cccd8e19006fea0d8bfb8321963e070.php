


<div class="content" style="margin-top: 24px">
  <div class="container-fluid">

    <div style="margin-bottom: 15px">
      <span class="page-title">Library </span>
      <span style="float: right;"><a href="/dashboard/add-to-library" class="btn btn-primary btn-rounded">Add Library</a></span>
    </div>

     <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">ISBN<span class="text-danger">*</span></label>
      <input type="" id="isbn" class="form-control" placeholder="Search ISBN NO#" onkeyup="myFunction()" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Book Title<span class="text-danger">*</span></label>
      <input type="" id="booktitle" class="form-control" placeholder="Search Book title" onkeyup="bookFunction()" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Author<span class="text-danger">*</span></label>
      <div class="input-group">
        <input type="" id="author" class="form-control" placeholder="Search Author" onkeyup="author()" >
      </div>
    </div>
  </div>

  <table id="tableData" class="table table-striped custom-table mb-0 table-sm">
  <thead>
    <tr>
      <th><input type="checkbox" id="master"></th>
      <th>ID</th>
      <th>ISBN No#</th>
      <th>Book Title</th>
      <th>Subject</th>
      <th>Author</th>
      <th>Level</th>
      <th>Published</th>
      <th>Uploaded Date</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $getbooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><input type="checkbox" name=""></th>
      <th scope="row"><?php echo e($books -> id); ?></th>
      <td><?php echo e($books -> book_isbn); ?></td>
      <td><?php echo e($books -> book_name); ?></td>
      <td><?php echo e($books -> book_subject); ?></td>
       <td><?php echo e($books -> book_writer); ?></td>
      <td><?php echo e($books -> book_level); ?></td>
      <td><?php echo e($books -> book_date); ?></td>
       <td><?php echo e($books -> created_at); ?></td>
      <td>
      <a href="/uploads/documents/<?php echo e($books->filebook); ?>" target="_blank" class="btn btn-primary btn-rounded btn-sm"><i class="fa fa-file-pdf-o m-r-5"></i><small>Download</small></a> 
      </td>
             <td class="text-right">
      <div class="dropdown dropdown-action">
          <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="/edit/library/<?php echo $books -> id; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
              <a class="dropdown-item" href="/library/delete/<?php echo $books -> id; ?>" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i>Trash</a>
          </div>
      </div>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

</div>
</div>
	
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("isbn");
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


function bookFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("booktitle");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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


function author() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("author");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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

 $("#master").click(function (){
    $('input:checkbox').not(this).prop('checked', this.checked)
  });
</script>

<?php /**PATH C:\xampp\htdocs\management\school\resources\views/library/librarytable.blade.php ENDPATH**/ ?>