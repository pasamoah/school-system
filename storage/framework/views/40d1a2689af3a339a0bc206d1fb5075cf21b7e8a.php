


<?php $__env->startSection('content'); ?>

<style type="text/css">
	
.formframe{

	width: 95%;
	background-color: #f7f7f7;
	height: 396px;
	margin-top: 25px;
	margin-left: 15px;
	border: 1px solid #f1f1f1;
}

.innput{

	outline: none;
	 border: 1px solid #cccccc;
	 background-color:#ffffff;
	 height: 50px;
	 padding: 20px;
	 width: 243px;
	 margin-left: 20px;
	 margin-top: 40px;
}

.seletion{

	outline: none;
	 border: none;
	 background-color:#ffffff;
	 height: 35px;
	 padding: 20px;
	 width: 243px;
	 margin-left: 20px;
	 border-radius: 5px;
	 margin-top: 54px;

::placeholder{
	font-size:10px;
}

</style>


<div>

<div style="font-size: 28px; margin-top: 40px; margin-left: 20px">
	<span>Add New Book</span>
	<span style="float: right;margin-right: 50px"><a href="/dashboard/librarystore" class="btn btn-primary btn-lg"><i class="fas fa-book-reader"></i>&nbsp;All Books</a></span>
</div>
<?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="formframe">
	
<form method="POST" action="/edit/<?php echo $loadlibrary->id; ?>" enctype="multipart/form-data" id="libraryform">

	 <?php echo e(csrf_field()); ?>

	
<input type="text" style="background-color:#f1f1f1" class="innput" name="book_name" value="<?php echo $loadlibrary -> book_name; ?>" placeholder="Book Name" required>

<input type="text" style="background-color:#f1f1f1" class="innput"  name="book_subject" placeholder="Subject" required="" value="<?php echo $loadlibrary -> book_subject; ?>">

<input type="text" style="background-color:#f1f1f1" class="innput"  name="book_writer" placeholder="Author" required="" value="<?php echo $loadlibrary -> book_writer; ?>">


<input type="text" style="background-color:#f1f1f1" class="innput"  name="book_level" placeholder="Level" required="" value="<?php echo $loadlibrary -> book_level; ?>">


<input type="text" style="background-color:#f1f1f1" name="book_isbn" class="innput" placeholder="ISBN No#" required value="<?php echo $loadlibrary -> book_isbn; ?>" >

<input type="text" style="background-color:#f1f1f1" name="book_date" class="innput datetimepicker"  placeholder="Publishing Date" required="" value="<?php echo $loadlibrary -> book_date; ?>">

<div class="form-group" style="margin: 10px">
	<input type="file" name="document" class="form-control" style="width: 22%" value="<?php echo $loadlibrary -> filebook; ?>" >
</div>


<div class="form-group" style="margin:30px;">	
<button class="btn btn-primary btn-lg">Save</button>

</div>



</form>

<script type="text/javascript">

	          function refresh() {
	          	document.getElementById('libraryform').reset();
	          }


</script>

</div>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/library/libraryedit-form.blade.php ENDPATH**/ ?>