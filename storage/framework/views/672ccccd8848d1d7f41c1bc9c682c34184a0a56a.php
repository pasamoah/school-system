





<?php $__env->startSection('content'); ?>
            <div class="content" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-sm-4 col-5">
                        <h4 class="page-title">Employee Salary</h4>
                    </div>
                    <div class="col-sm-8 col-7 text-right m-b-30">
                        <a href="/dashboard/payroll" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Salary</a>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Role</label>
                            <select class="form-control">
                                <option> -- Select -- </option>
                                <option>Employee</option>
                                <option>Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Leave Status</label>
                            <select class="form-control">
                                <option> -- Select -- </option>
                                <option> Pending </option>
                                <option> Approved </option>
                                <option> Rejected </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">From</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">To</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th style="width:25%;">Employee</th>
                                        <th>Employee ID</th>
                                        <th>Email</th>
                                        <th>Joining Date</th>
                                        <th>Role</th>
                                        <th>Salary</th>
                                        <th>Payslip</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $salaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
											<a href="/staff/<?php echo $salary->staff_id; ?>"><img class="rounded-circle" src="/uploads/<?php echo e($salary->image); ?>" height="28" width="28" alt=""> <?php echo $salary->firstname_staff; ?> <?php echo $salary->lastname_staff; ?>

                                            </a>
                                        </td>
                                        <td><?php echo $salary->staff_id; ?></td>
                                        <td><a href="mailto::<?php echo $salary->email_staff; ?>"><?php echo $salary->email_staff; ?></a></td>
                                        <td><?php echo $salary->joining_date; ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="custom-badge status-orange dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $salary->designation_staff; ?></a>
                                            </div>
                                        </td>
                                        <td>GHc <?php echo $salary->basic_salary; ?>.00</td>
                                        <td><a class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-slip">Slip</a></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-salary.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="/delete/salary/<?php echo $salary->id; ?>" data-toggle="modal" data-target=""><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Modal -->
<div class="modal fade bd-example-modal-slip" id="listview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pay Slip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Invoice</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white">PDF</button>
                            <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row custom-invoice">
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <img src="assets/img/logo-dark.png" class="inv-logo" alt="">
                                        <ul class="list-unstyled">
                                            <li>PreClinic</li>
                                            <li>3864 Quiet Valley Lane,</li>
                                            <li>Sherman Oaks, CA, 91403</li>
                                            <li>GST No:</li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Invoice #INV-0001</h3>
                                            <ul class="list-unstyled">
                                                <li>Date: <span>October 12, 2017</span></li>
                                                <li>Due date: <span>November 25, 2017</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6 m-b-20">
                                        
                                            <h5>Invoice to:</h5>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <h5><strong>Barry Cuda</strong></h5>
                                                </li>
                                                <li><span>Global Technologies</span></li>
                                                <li>5754 Airport Rd</li>
                                                <li>Coosada, AL, 36020</li>
                                                <li>United States</li>
                                                <li>888-777-6655</li>
                                                <li><a href="#">barrycuda@example.com</a></li>
                                            </ul>
                                        
                                    </div>
                                    <div class="col-sm-6 col-lg-6 m-b-20">
                                        <div class="invoices-view">
                                            <span class="text-muted">Payment Details:</span>
                                            <ul class="list-unstyled invoice-payment-details">
                                                <li>
                                                    <h5>Total Due: <span class="text-right">$288.2</span></h5>
                                                </li>
                                                <li>Bank name: <span>Profit Bank Europe</span></li>
                                                <li>Country: <span>United Kingdom</span></li>
                                                <li>City: <span>London E1 8BF</span></li>
                                                <li>Address: <span>3 Goodman Street</span></li>
                                                <li>IBAN: <span>KFH37784028476740</span></li>
                                                <li>SWIFT code: <span>BPT4E</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ITEM</th>
                                                <th>DESCRIPTION</th>
                                                <th>UNIT COST</th>
                                                <th>QUANTITY</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Full body checkup</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                                <td>$150</td>
                                                <td>1</td>
                                                <td>$150</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Blood Test</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                                <td>$12</td>
                                                <td>1</td>
                                                <td>$12</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>General checkup</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                                <td>$100</td>
                                                <td>1</td>
                                                <td>$100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="row invoice-payment">
                                        <div class="col-sm-7">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="m-b-20">
                                                <h6>Total due</h6>
                                                <div class="table-responsive no-border">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal:</th>
                                                                <td class="text-right">$262</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax: <span class="text-regular">(10%)</span></th>
                                                                <td class="text-right">$26.2</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td class="text-right text-primary">
                                                                    <h5>$288.2</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-info">
                                        <h5>Other information</h5>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien interdum vel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

      </div>
      <div class="modal-footer">
        <span><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></span>
        <span><button type="button" class="btn btn-danger" data-dismiss="modal">Delete All</button></span>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\apps\school\resources\views/inc/salary.blade.php ENDPATH**/ ?>