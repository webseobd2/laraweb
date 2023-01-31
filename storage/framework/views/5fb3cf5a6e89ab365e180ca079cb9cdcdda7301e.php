
<?php $__env->startSection('title','Welcome our hoomepage'); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <h2 class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    'green' => $isActive,
    'red' => ! $isActive,
]) ?>">
        Title heading
    </h2>
    <h5>Title Description, dec 7, 2022</h5>
    <div class="fakeimg" style="height: 200px;;">Image</div>
    <p>Some text....</p>
    <p> fsljf jflsjf jdfsf dflsjfldsjfoiern foiwerfl fwsjfw</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/pages/home.blade.php ENDPATH**/ ?>