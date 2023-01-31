<!DOCTYPE HTML>
<!--
	Tessellate by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tessellate by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="component/assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<?php if (isset($component)) { $__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d = $component; } ?>
<?php $component = App\View\Components\Democomponent\Demoheader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('democomponent.demoheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Democomponent\Demoheader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d)): ?>
<?php $component = $__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d; ?>
<?php unset($__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d); ?>
<?php endif; ?>
			
			<!-- First -->
			<?php if (isset($component)) { $__componentOriginala12cb1fa5754c7ea6dca6ebcd1b0f702ad0ca81f = $component; } ?>
<?php $component = App\View\Components\Democomponent\Democontent::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('democomponent.democontent'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Democomponent\Democontent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala12cb1fa5754c7ea6dca6ebcd1b0f702ad0ca81f)): ?>
<?php $component = $__componentOriginala12cb1fa5754c7ea6dca6ebcd1b0f702ad0ca81f; ?>
<?php unset($__componentOriginala12cb1fa5754c7ea6dca6ebcd1b0f702ad0ca81f); ?>
<?php endif; ?>
			

		<!-- Footer -->
		<?php if (isset($component)) { $__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d = $component; } ?>
<?php $component = App\View\Components\Democomponent\Demoheader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('democomponent.demoheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Democomponent\Demoheader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d)): ?>
<?php $component = $__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d; ?>
<?php unset($__componentOriginale7b97a9ca54472e4dbb7aa66481ea38c7d96c44d); ?>
<?php endif; ?>

		<!-- Scripts -->
			<script src="component/assets/js/jquery.min.js"></script>
			<script src="component/assets/js/jquery.scrolly.min.js"></script>
			<script src="component/assets/js/browser.min.js"></script>
			<script src="component/assets/js/breakpoints.min.js"></script>
			<script src="component/assets/js/util.js"></script>
			<script src="component/assets/js/main.js"></script>

	</body>
</html><?php /**PATH G:\wplocal\laragon\www\monir\resources\views/app.blade.php ENDPATH**/ ?>