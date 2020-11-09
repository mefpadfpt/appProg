<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title> Admin Login</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('media/favicons/favicon.png')); ?>">
    <link rel="icon" sizes="192x192" type="image/png" href="<?php echo e(asset('media/favicons/favicon-192x192.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('media/favicons/apple-touch-icon-180x180.png')); ?>">

    <!-- Fonts and Styles -->
    <?php echo $__env->yieldContent('css_before'); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="<?php echo e(asset('assets/css/oneui.css')); ?>">


    <?php echo $__env->yieldContent('css_after'); ?>

    <!-- Scripts -->
    <script>
        window.Laravel = {
            !!json_encode(['csrfToken' => csrf_token(), ]) !!
        };
    </script>
</head>

<body>

    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="w-100">
                    <!-- Sign In Section -->
                    <div class="bg-white">
                        <div class="content content-full">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <p class="mb-2">
                                            <i class="fa fa-2x fa-circle-notch" style="color:rgb(246, 120, 58);"></i>
                                        </p>
                                        <h1 class="h4 mb-1">
                                            Se Connecter
                                        </h1>
                                        <h2 class="h6 font-w400 text-muted mb-3">

                                        </h2>
                                    </div>

                                    <form class="js-validation-signin" action="<?php echo e(route('login')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="py-3">
                                            <div class="form-group">
                                                <input id="email" type="email" class="form-control form-control-lg form-control-alt <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>


                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control form-control-lg form-control-alt <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" autocomplete="current-password" required autofocus placeholder="Password">
                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>


                                            <!-- <div class="form-group">
            <div class="d-md-flex align-items-md-center justify-content-md-between">
             <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
              <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
             </div> -->
                                            <!-- <?php if(Route::has('password.request')): ?>
             <div class="py-2">
              <a class="font-size-sm" href="<?php echo e(route('password.request')); ?>">Forgot Password?</a>
             </div>
         <?php endif; ?> -->
                                            <!-- </div>
           </div>
          </div> -->
                                            <div class="form-group row justify-content-center mb-0">
                                                <div class="col-md-6 col-xl-5">
                                                    <button type="submit" class="btn btn-block text-white" style="background-color:rgb(246, 120, 58);">
                                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Connecter
                                                    </button>
                                                </div>
                                            </div>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="<?php echo e(asset('assets/js/oneui.core.min.js ')); ?>"></script>

                    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
                    <script src="<?php echo e(asset('assets/js/oneui.app.min.js ')); ?>"></script>

                    <!-- Page JS Plugins -->
                    <script src="<?php echo e(asset('assets/js/plugins/jquery-validation/jquery.validate.min.js ')); ?>"></script>

                    <!-- Page JS Code -->
                    <script src="<?php echo e(asset('assets/js/pages/op_auth_signin.min.js ')); ?>"></script><?php /**PATH C:\wamp64\www\GestionProgramme (8)\GestionProgramme\resources\views/auth/login.blade.php ENDPATH**/ ?>