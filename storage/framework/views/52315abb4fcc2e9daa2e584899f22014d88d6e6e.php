<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <div class="header">
        <?php echo $__env->make('pages.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="topnav">
            <?php echo $__env->make('pages.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div> 
    </div>

        <div class="row">
            <div class="leftcolumn">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <div class="rightcolumn">
                <?php echo $__env->make('pages.partials.right_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    <div class="footer">
        <?php echo $__env->make('pages.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>
</html><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/pages/master.blade.php ENDPATH**/ ?>