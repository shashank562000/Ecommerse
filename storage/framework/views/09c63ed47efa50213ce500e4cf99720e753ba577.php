<!DOCTYPE html>
<html lang="zxx"> 
<head>
	<?php echo $__env->yieldContent('seo'); ?>
	<!-- Favicon -->
	<link href="/storage/<?php echo e($shareSettings->favicon); ?>" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/all.css')); ?>"/>

	<link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>"/>
	<!-- font-owesome icons link -->
    <link href="<?php echo e(asset('frontend/fontawesome/css/all.css')); ?>" rel="stylesheet">

	<?php echo \Livewire\Livewire::styles(); ?>

	<?php echo $__env->yieldContent('css'); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<?php if($shareSettings->google_analytics != null): ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($shareSettings->google_analytics); ?>"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', '<?php echo e($shareSettings->google_analytics); ?>');
	</script>
	<?php endif; ?>

</head>
<body>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="/" class="site-logo">
							<img src="/storage/<?php echo e($shareSettings->logo); ?>" alt="">
						</a>
					</div>
					<!-- search area -->
					<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('search-dropdown', [])->dom;
} elseif ($_instance->childHasBeenRendered('oHgwp24')) {
    $componentId = $_instance->getRenderedChildComponentId('oHgwp24');
    $componentTag = $_instance->getRenderedChildComponentTagName('oHgwp24');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oHgwp24');
} else {
    $response = \Livewire\Livewire::mount('search-dropdown', []);
    $dom = $response->dom;
    $_instance->logRenderedChild('oHgwp24', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-heart"></i>
									<?php if(Cart::instance('wishlist')->count() != 0): ?>
										<span><?php echo e(Cart::instance('wishlist')->count()); ?></span>
									<?php endif; ?>
								</div>
								<a href="<?php echo e(route('wishlist.index')); ?>">Wishlist</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span><?php echo e(Cart::instance('default')->count()); ?></span>
								</div>
								<a href="<?php echo e(route('cart.index')); ?>">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('nav-bar', [])->dom;
} elseif ($_instance->childHasBeenRendered('sGZBSzB')) {
    $componentId = $_instance->getRenderedChildComponentId('sGZBSzB');
    $componentTag = $_instance->getRenderedChildComponentTagName('sGZBSzB');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sGZBSzB');
} else {
    $response = \Livewire\Livewire::mount('nav-bar', []);
    $dom = $response->dom;
    $_instance->logRenderedChild('sGZBSzB', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
	</header>
	<!-- Header section end -->

	<?php echo $__env->yieldContent('content'); ?>


	<!-- Footer section -->
	<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('footer-detail', [])->dom;
} elseif ($_instance->childHasBeenRendered('UilkcTY')) {
    $componentId = $_instance->getRenderedChildComponentId('UilkcTY');
    $componentTag = $_instance->getRenderedChildComponentTagName('UilkcTY');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UilkcTY');
} else {
    $response = \Livewire\Livewire::mount('footer-detail', []);
    $dom = $response->dom;
    $_instance->logRenderedChild('UilkcTY', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<?php echo \Livewire\Livewire::scripts(); ?>

	<script src="<?php echo e(asset('frontend/js/all.js')); ?>"></script>

	<script src="<?php echo e(asset('js/toastr.js')); ?>"></script>
	<script>
	    <?php if(Session::has('success')): ?>
	    toastr.success("<?php echo e(Session::get('success')); ?>")
	    <?php endif; ?>
	</script>

	<script>
	    <?php if(Session::has('error')): ?>
	    toastr.error("<?php echo e(Session::get('error')); ?>")
	    <?php endif; ?>
	</script>

	<?php echo $__env->yieldContent('scripts'); ?>

	</body>
</html>
<?php /**PATH E:\Task\zimcart\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>