

<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 Edit student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="<?php echo e(route('employees.index')); ?>">Back to index</a>
        </div>
    </div>
</div>
<form action="#" method="POST" style="margin-top: 20px;">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="<?php echo e($employee->name); ?>" class="form-control" placeholder="Enter your Name here">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrption:</strong>
                <textarea class="form-control" style="height: 80px;" name="description" placeholder="Your address here"><?php echo e($employee->description); ?></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Is awarded?</strong>
                <input type="checkbox" name="is_awarded" value="1" <?php if(old('1',$employee->is_awarded)): echo 'checked'; endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="cl-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                <select name="status">
                    <?php $__currentLoopData = ['Pending','Wait','Active']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($status); ?>" @Selection($status==$employee->
                            <?php echo e($status); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="text-center cl-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Update</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/employee_edit.blade.php ENDPATH**/ ?>