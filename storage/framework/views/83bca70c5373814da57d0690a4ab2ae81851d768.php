

<?php $__env->startSection('content'); ?>

<!-- breadcrumb -->
<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-decoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">Terms & Condtions</li>
	</ol>
	
</nav>

<div class="card">
	<div class="card-header d-flex justify-content-between btn-sm">
		<span class="mt-2"><h4>Terms & Conditions</h4></span>
		<a href="<?php echo e(isset($term) ? route('terms.edit', $term->id) : route('terms.create')); ?>" class="btn btn-dark"><?php echo e(isset($term) ? 'Edit Terms' : 'Add Terms'); ?></a>
	</div>

	<div class="card-body">
		<?php if(isset($term)): ?>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="eg Zimcart Terms & Conditions" value="<?php echo $term->heading; ?>" readonly="">
			</div>
			<div><?php echo $term->terms; ?></div>
		<?php else: ?>
			<div class="text-center">
				<h3>Please add Terms and Conditions to use services like Facebook login & Google login</h3>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/terms/show.blade.php ENDPATH**/ ?>