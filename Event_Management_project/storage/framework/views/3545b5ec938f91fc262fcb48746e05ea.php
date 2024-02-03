<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('')); ?>assets/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('')); ?>assets/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('')); ?>assets/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/styles/core.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/styles/icon-font.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/src/plugins/jquery-steps/jquery.steps.css')); ?>">
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

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="assets/vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.html">Registration</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="assets/vendors/images/register-page-img.png" alt="">
				</div>
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>                       
            <?php endif; ?>
				<div class="col-md-6 col-lg-5 text-center">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form method="POST" action="<?php echo e(route('register')); ?>"  class="tab-wizard2 wizard-circle wizard" >
								<?php echo csrf_field(); ?>
								
								<section>
								
									<div class="form-wrap max-width-800 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email Address*</label>
											<div class="col-sm-12">
												<input type="email" class="form-control" name="email">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username*</label>
											<div class="col-sm-12">
												<input type="text" class="form-control" name="name">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password*</label>
											<div class="col-sm-12">
												<input type="password" class="form-control" name="password">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password*</label>
											<div class="col-sm-12">
												<input type="password" class="form-control" name="password_confirmation">
											</div>
										</div>
									</div>
								</section>
								
								<button type="submit"  class="bg-warning p-3 w-50" >Regisration</button>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?php echo e(asset('assets/vendors/scripts/core.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/script.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/process.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/layout-settings.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/src/plugins/jquery-steps/jquery.steps.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/vendors/scripts/steps-setting.js')); ?>"></script>
</body>

</html><?php /**PATH F:\xampp8\htdocs\wdpf55_laravel\Event_Management_project\resources\views/backend/register.blade.php ENDPATH**/ ?>