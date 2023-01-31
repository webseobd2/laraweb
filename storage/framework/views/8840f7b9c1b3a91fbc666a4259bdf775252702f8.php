
<?php $__env->startSection('content'); ?>
    <div style="margin-top:20px;" class="row">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h2>An Example of Checked/Selection/Disable</h2>
            </div>
        </div>
    </div>
    <table style="margin-top: 20px;" class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Status</th>
            <th>Awarded</th>
            <th>Action</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($employee->id); ?></td>
            <td><?php echo e($employee->name); ?></td>
            <td>
            <span class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'text-white',
                'bg-danger'=>$employee->status=='Pending',
                'bg-success'=>$employee->status=='Awarded',
                'bg-warning'=>$employee->status=='Wait',

            ]) ?>">

            <?php echo e($employee->status); ?>


            </span>
            </td>
            <td><input type="checkbox" name="awarded" value="awarded" <?php if(old('awarded',$employee->is_awarded)): echo 'checked'; endif; ?> /></td>
            <td><a class="btn btn-primary" href="<?php echo e(route ('employees.edit',$employee->id)); ?>">Edit</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="3">No Employee Available</td>
        </tr>
        <?php endif; ?>
    </table>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/employee_list.blade.php ENDPATH**/ ?>