

<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 Edit student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="<?php echo e(route('students.index')); ?>">Back to index</a>
        </div>
        <div class="float-start">
            <a class="btn btn-success" href="<?php echo e(route('students.create')); ?>">Back to the insert Form</a>
        </div>
    </div>
</div>
<form action="<?php echo e(route('students.update',$student->id)); ?>" method="POST" style="margin-top: 20px;">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="<?php echo e($student->name); ?>" class="form-control" placeholder="Enter your Name here">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height: 80px;" name="address" placeholder="Your address here"><?php echo e($student->address); ?></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="text-center cl-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Update</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/edit.blade.php ENDPATH**/ ?>