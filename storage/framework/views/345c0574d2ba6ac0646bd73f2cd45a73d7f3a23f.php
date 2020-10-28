          
	
		<div style="font-size: 18px; font-weight: 600; margin-bottom: 10px; border-left: 3px solid #4CAF50 ">&nbsp;&nbsp;NOTICE BOARD</div>

		<div id="eventlistview">
          <?php if(count($msgevents) > 0): ?>
          <?php $__currentLoopData = $msgevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="list-group-item list-group-item-action flex-column align-items-start">
		    <div class="d-flex w-100 justify-content-between">
		      <h5 class="mb-1"><small>
		      	<label class="text-muted" style="border-radius: 30px"><?php echo e($msg -> title); ?></label></small>
		     </h5>
		      <small class="text-muted">Created: <?php echo e($msg -> created_at->diffForHumans()); ?>,  by <a href=""> <?php echo "@";?><?php echo e($msg -> username); ?></a></small>
		    </div>
		    <p class="mb-1">
		    	<samll style="font-family: Candara; font-size: 15px"><?php echo substr($msg -> message,0,120); ?> [...]</small> <a href="" data-toggle="modal" data-target="#readmore">Read More</a>
		    </p>
		    <small class="text-muted">
		    	
		    	<i class="fa fa-calendar" title="Event Created at <?php echo $msg->created_at; ?>"></i> &nbsp; Event Date: <?php echo $msg -> deadline; ?>&nbsp;&nbsp;&nbsp;&nbsp; | <a href="/event/edit/<?php echo $msg->id; ?>" data-toggle="modal" title="Edit" class="eventinfo" data-id="<?php echo e($msg->id); ?>" data-token="<?php echo e(csrf_token()); ?>"><i class="fa fa-pencil-square-o"></i></a> | <a href="/delete/<?php echo $msg -> id; ?>" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a> 
		    </small><hr>
		 </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php echo $msgevents->links(); ?>



	</div>
<?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/eventlist.blade.php ENDPATH**/ ?>