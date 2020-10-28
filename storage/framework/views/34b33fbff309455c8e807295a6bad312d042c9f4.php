
<style type="text/css">
	::placeholder{
		font-size: 12px
	}
</style>

<div style="margin-top: 30px;" >
		<?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<div style="margin-bottom: 13px; font-size: 18px ; border-left: 3px solid #4CAF50; font-weight: 600"><b>&nbsp;&nbsp;CREATE NOTICE</b></div>



<form class="btn-submit" id="ajax">
<div class="form-group">

	<input type="text" name="username" value="<?php echo Auth()->user()->name; ?>" hidden="">

</div>

<div class="form-group">
	<label>Title</label>
    <input class="form-control" type="text" name="title" required="">
</div>

<div class="form-group">
    <label>Date</label>
    <div class="cal-icon">
        <input type="text" class="form-control datetimepicker" name="deadline" required="">
    </div>
</div>

<div class="form-group">
    <textarea class="form-control" placeholder="What's the event about?"  rows="3" cols="30" name="message"></textarea>
</div>
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<div class="form-group">
    <button class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>

</div>


<script type="text/javascript">

    setTimeout(function(){
        $('#messagebox').hide()
    }, 10000);

    $("#ajax").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo e(route('eventinsert')); ?>",
                dataType: "json",
                data: $('#ajax').serialize(),
                success: function(data){
                    alert("Successfully")
                    $("#eventlistview").load(" #eventlistview");
                    $("#ajax")[0].reset();
                    
                },
                error: function(data){
                    alert(data);
                }
            });
        });

</script>




   
<?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/eventform.blade.php ENDPATH**/ ?>