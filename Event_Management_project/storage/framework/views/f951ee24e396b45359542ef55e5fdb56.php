<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title><?php echo $__env->yieldContent('title'); ?></title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/assets/vendors/images/favicon-32x32.png')); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/assets/vendors/images/favicon-16x16.png')); ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/styles/core.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/styles/icon-font.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/styles/style.css')); ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	

	<?php echo $__env->make('backend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
	<?php echo $__env->make('backend.layouts.leftsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="mobile-menu-overlay"></div>
	<?php echo $__env->yieldContent('content'); ?>


	<?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- js -->
	<script src="<?php echo e(asset('assets/vendors/scripts/core.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/script.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/process.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/layout-settings.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/src/plugins/apexcharts/apexcharts.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/dashboard.js')); ?>"></script>
</body>
</html><?php /**PATH F:\xampp8\htdocs\wdpf55_laravel\Event_Management_project\resources\views/backend/layouts/app.blade.php ENDPATH**/ ?>