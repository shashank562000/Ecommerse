

<?php $__env->startSection('content'); ?>

<!-- breadcrumb -->
<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-decoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">About Information</li>
	</ol>
	
</nav>

<div class="card">
	<div class="card-header d-flex justify-content-between btn-sm">
		<span class="mt-2"><h4>About Information</h4></span>
		<a href="<?php echo e(isset($about) ? route('about.edit', $about->id) : route('about.create')); ?>" class="btn btn-dark"><?php echo e(isset($about) ? 'Edit about' : 'Add about'); ?></a>
	</div>

	<div class="card-body">
		<?php if(isset($about)): ?>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="eg Zimcart abouts & Conditions" value="<?php echo $about->heading; ?>" readonly="">
			</div>
			<div><?php echo $about->about; ?></div>
		<?php else: ?>
			<div class="text-center">
				<h3>Add about information to let your customers learn  more about you!</h3>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/about/show.blade.php ENDPATH**/ ?>