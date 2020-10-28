
<?php $__env->startSection('content'); ?>

<div class="content">
  <div class="page-title">
    Edit Event 
  </div>
  <form method="POST" action="/dashboard/edit/<?php echo $event->id; ?>">
    <?php echo csrf_field(); ?>
      <div class="form-group">

        <input type="text" name="username" value="<?php echo Auth()->user()->name; ?>" hidden="">

      </div>

      <div class="form-group">
        <label>Title</label>
          <input class="form-control" type="text" name="title" required="" value="<?php echo $event->title; ?>">
      </div>

      <div class="form-group">
          <label>Date</label>
          <div class="cal-icon">
              <input type="text" class="form-control datetimepicker" name="deadline" required="" value="<?php echo $event->deadline; ?>">
          </div>
      </div>

      <div class="form-group">
          <textarea class="form-control" placeholder="What's the event about?"  rows="3" cols="30" name="message"><?php echo e($event->message); ?></textarea>
      </div>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-group">
          <button class="btn btn-primary btn-lg">update</button>
          </div>
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/inc/edit-event.blade.php ENDPATH**/ ?>