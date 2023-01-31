

<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 show student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="<?php echo e(route('students.index')); ?>">Back to index</a>
        </div>
    </div>
</div>
<form action="<?php echo e(route('students.store')); ?>" method="POST" style="margin-top: 20px;">
<?php echo csrf_field(); ?>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter your Name here">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height: 80px;" name="address" placeholder="Your address here"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="text-center cl-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views\create.blade.php ENDPATH**/ ?>