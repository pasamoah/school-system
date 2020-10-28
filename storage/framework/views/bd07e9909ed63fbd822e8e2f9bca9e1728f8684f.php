


<?php $__env->startSection('content'); ?>


<?php echo url()->current();  ?>

<div class="content">
<div class="list-group" style=" margin-bottom: 50px">
  <div href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <form method="POST" action="/submit-answer/<?php echo $display->id; ?>">
      <?php echo csrf_field(); ?>
    <p class="mb-1"><?php echo $display->question_titile; ?></p>
    <fieldset class="form-group">
    <div class="row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="<?php echo $display->answer_a; ?>">
          <label class="form-check-label" for="gridRadios1">
            [A] <?php echo $display->answer_a; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="<?php echo $display->answer_b; ?>">
          <label class="form-check-label" for="gridRadios2">
            [B] <?php echo $display->answer_b; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="<?php echo $display->answer_c; ?>">
          <label class="form-check-label" for="gridRadios2">
            [C] <?php echo $display->answer_c; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="<?php echo $display->answer_d; ?>">
          <label class="form-check-label" for="gridRadios2">
            [D] <?php echo $display->answer_d; ?>

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="<?php echo $display->answer_e; ?>">
          <label class="form-check-label" for="gridRadios2">
           [E]  <?php echo $display->answer_e; ?>

          </label>
        </div>
      </div>
    </div>
  </fieldset>
    <small class="text-muted">Select The Best Answer</small>

    <div class="form-group" style="margin-top: 12px">
      <button class="btn btn-primary btn-bg">Submit</button>
    </div>
    </form>

  </div>
</div>


<a href="{{ url('<?php echo url()->current();  ?>'), ['id' => $display->next()->getKey()])}}" class="btn btn-primary">Next >></a>

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/each-questionpage.blade.php ENDPATH**/ ?>