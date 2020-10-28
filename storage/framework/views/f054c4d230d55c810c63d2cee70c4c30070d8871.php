



<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                        <?php echo $__env->make('inc.errorfile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <form method="POST" action="/update/user/<?php echo Auth::user()->student_reference; ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                    <?php if(Auth::user()->admin_photo ==""): ?>
                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="assets/img/user.jpg" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="image">
                                    </div>
                                </div>
                                    <?php else: ?>

                                <div class="profile-img-wrap">
                                    <img class="inline-block" src="/uploads/<?php echo Auth::user()->admin_photo; ?> " alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="image">
                                    </div>
                                </div>

                                <?php endif; ?>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Name</label>
                                                <input type="text" class="form-control floating" value="<?php echo Auth::user()->name; ?>" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Date of Birth</label>
                                                <div class="cal-icon">
                                                <input type="text" class="form-control floating datetimepicker" value="<?php echo Auth::user()->admin_date_of_birth; ?>" name="dob">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Email</label>
                                                    <input class="form-control floating" type="email" name="email" value="<?php echo Auth::user()-> email; ?>">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Change Password</label>
                                                    <input class="form-control floating" type="Password" name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Confirm Password</label>
                                                    <input class="form-control floating" type="password" name="confirm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/edit-user.blade.php ENDPATH**/ ?>