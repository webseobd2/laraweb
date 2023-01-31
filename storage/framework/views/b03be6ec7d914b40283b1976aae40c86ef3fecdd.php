

<?php $__env->startSection('content'); ?>
<div class="row" style="margin-top: 20px;">
    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>laravel 9 show student</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="<?php echo e(route('asas.create')); ?>">Add new student</a>
        </div>
    </div>
</div>
<table class="table table-bordered" style="margin-top: 20px;">
    <tr>
        <th>No:</th>
        <th>Name:</th>
        <th>Address:</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $asas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($asa->name); ?></td>
        <td><?php echo e($asa->address); ?></td>
        <td>
        <form action="<?php echo e(route('asas.destroy', $asa->id)); ?>" method="POST">
        <!-- <a class="btn btn-info" href="<?php echo e(route('students.edit', $asa->id)); ?>">Edit</a> -->
        
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/asa/asa_index.blade.php ENDPATH**/ ?>