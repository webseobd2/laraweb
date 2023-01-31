<h2>Hello <?php echo e($name); ?>!</h2>

<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($student->name); ?><br/>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views\practice\hello.blade.php ENDPATH**/ ?>