<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link href="/storage/<?php echo e($shareSettings->favicon); ?>" rel="shortcut icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- font-owesome icons link -->
    <link href="<?php echo e(asset('frontend/fontawesome/css/all.css')); ?>" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldContent('css'); ?>
</head>
<body class="bg-dark">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top shadow-sm border-bottom">
            <div class="container">
                <a class="navbar-brand text-light" href="<?php echo e(route('home')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>

                <a href="<?php echo e(url('/')); ?>" target="_blank" class="btn btn-success align-content-center" style="outline: none; border: none; background-color: #fff; color: #000; margin-left: 50%;">View Application Frontend</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link  text-light" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle  text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('my-profile.edit')); ?>">Settings</a>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-dark">
            <div class="container">
                <?php if(auth()->guard()->check()): ?>

                <div class="row">
                    <div class="col-md-3">

                        <ul class="list-group">

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('orders.index')); ?>" class="text-decoration-none text-light">Orders</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('categories.index')); ?>" class="text-decoration-none text-light">Category</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('subcategories.index')); ?>" class="text-decoration-none text-light">Sub Category</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('products.index')); ?>" class="text-decoration-none text-light">Products</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('slides.index')); ?>" class="text-decoration-none text-light">Slides</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('coupon.index')); ?>" class="text-decoration-none text-light">Coupons</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('contactMessages')); ?>" class="text-decoration-none text-light">Messages</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('social-links.index')); ?>" class="text-decoration-none text-light">Social Links</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('users.index')); ?>" class="text-decoration-none text-light">Platform Users</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('system-settings.index')); ?>" class="text-decoration-none text-light">System Settings</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('about.index')); ?>" class="text-decoration-none text-light">About Info</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('privacy.index')); ?>" class="text-decoration-none text-light">Privacy Policy</a>
                            </li>

                            <li class="list-group-item bg-primary border-white">
                                <a href="<?php echo e(route('terms.index')); ?>" class="text-decoration-none text-light">Terms & Conditions</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-9">
                        <?php if(Session::has('success')): ?>
                            <div class="alert alert-primary" role="alert">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(Session::has('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo e(Session::get('error')); ?>

                            </div>
                        <?php endif; ?>
                        
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>

                <?php else: ?>
                    <?php echo $__env->yieldContent('content'); ?>
                <?php endif; ?>
            </div>
        </main>
    </div>
</body>

<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php echo \Livewire\Livewire::scripts(); ?>


<?php echo $__env->yieldContent('scripts'); ?>

</html>
<?php /**PATH E:\Task\zimcart\resources\views/layouts/app.blade.php ENDPATH**/ ?>