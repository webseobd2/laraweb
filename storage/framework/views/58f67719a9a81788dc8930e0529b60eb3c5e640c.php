

<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 Show student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="<?php echo e(route('students.index')); ?>">Back to index</a>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="<?php echo e(route('students.create')); ?>">Back to the insert Form</a>
        </div>
    </div>
</div>

    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <?php echo e($student->name); ?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                 <?php echo e($student->address); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views\show.blade.php ENDPATH**/ ?>