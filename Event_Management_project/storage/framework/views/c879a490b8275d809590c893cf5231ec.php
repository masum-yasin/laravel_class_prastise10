<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eventiz - Event Conference HTML Templates</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('frontend/assets/images/favicon.png')); ?>">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="<?php echo e(asset('frontend/assets/css/plugin.css')); ?>" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/asset/fonts/line-icons.css')); ?>" type="text/css">
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Preloader Ends -->
    

    <!-- header starts -->
    <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header ends -->


   <?php echo $__env->yieldContent('content'); ?>

    <!-- footer starts -->
   <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    


    <!-- *Scripts* -->
    <script src="<?php echo e(asset('frontend/assets/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/plugin.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/custom-nav.js')); ?>"></script>
</body>

</html><?php /**PATH F:\xampp8\htdocs\wdpf55_laravel\Event_Management_project\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>