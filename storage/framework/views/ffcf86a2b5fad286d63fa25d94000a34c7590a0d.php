<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div style="width: 100%; background-color: #ffffff; padding: 5px; border-left: 4px solid #009efb; margin-bottom: 10px">
				<i class="fa fa-pencil-square-o"></i> Create Class
			</div>

			<div style="width: 100%; background-color: #ffffff; padding: 10px;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)">
				<form class="btn-submit" id="ajax">
					<?php echo csrf_field(); ?>
					<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="class_name" required="">
				</div>

				<div class="form-group">
					<label>Class Numeric</label>
					<input type="text" class="form-control" name="class_numeric">
				</div>

				<div class="form-group">
					<label>Section</label>
			         <select class="form-control" name="class_section">
		                <option disabled selected> -- Select -- </option>
		                <?php $__currentLoopData = $section_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <option value="<?php echo $section_list -> section_name; ?>"><?php echo $section_list -> section_name; ?></option>
		                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		            </select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Save</button>
				</div>

				</form>
			</div>

		</div>
		<div class="col">

			<div style="width: 100%; background-color: #ffffff; padding: 5px; border-left: 4px solid #009efb; margin-bottom: 10px">
				<i class="fa fa-list"></i> Class List
			</div>
			
			<div style="width: 100%; background-color: #ffffff; padding: 10px;  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2)">

				<?php echo $__env->make('inc.create-class-and-ListTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


			</div>

		</div>
	</div>
</div>


<script type="text/javascript">

    $("#ajax").on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                type: "post",
                url: "<?php echo e(route('classinsert')); ?>",
                dataType: "json",
                data: $('#ajax').serialize(),
                success: function(data){
                    alert("Data Save: " + data);
                    $("#classlist").load(" #classlist");
                    $("#ajax")[0].reset();
                    
                },
                error: function(data){
                    alert(data);
                }
            });
        });

</script><?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/create-class-and-list.blade.php ENDPATH**/ ?>