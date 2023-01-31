


<?php if(isset($records)): ?>
    I have <?php echo e(count($records)); ?> records!
<?php endif; ?>
<br>



<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li><?php echo e($user->name); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No users</p>
<?php endif; ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/practice.blade.php ENDPATH**/ ?>