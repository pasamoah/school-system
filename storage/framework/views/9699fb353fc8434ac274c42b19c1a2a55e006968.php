


<?php $__env->startSection('content'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/plugins/summernote/dist/summernote-bs4.css')); ?>">

<div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Compose</h4>
                    </div>
                </div>

                <div class="container-fluid">
                	<div class="row">
                		<div class="col-8">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <form>
                                <div class="form-group">
                                    <input type="email" placeholder="To" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Cc" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Bcc" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="text-center compose-btn">
                                        <button class="btn btn-primary"><span>Send</span> <i class="fa fa-send m-l-5"></i></button>
                                        <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="fa fa-floppy-o m-l-5"></i></button>
                                        <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i class="fa fa-trash-o m-l-5"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>	
                		</div>

                		<!-- Inbox Menu -->

                		<div class="col-4">
                			<?php echo $__env->make('inc.email-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                		</div>
                		
                	</div>
                </div>
                
            </div>


 <script src="<?php echo e(asset('assets/plugins/summernote/dist/summernote-bs4.min.js')); ?>"></script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\management\school\resources\views/compose-email.blade.php ENDPATH**/ ?>