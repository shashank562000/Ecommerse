

<?php $__env->startSection('content'); ?>

<!-- breadcrumb -->
<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-decoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">Social Links</li>
	</ol>
	
</nav>

<div class="card">
	<div class="card-header d-flex justify-content-between btn-sm">
		<span class="mt-2"><h4>Social Links</h4></span>
		<a href="<?php echo e(isset($socialLinks) ? route('social-links.edit', $socialLinks->id) : route('social-links.create')); ?>" class="btn btn-dark"><?php echo e(isset($socialLinks) ? 'Edit Social Links' : 'Add Social Links'); ?></a>
	</div>
	<div class="card-body">
		<?php if($socialLinks != null): ?>
		<table class="table table-dark table-bordered">
			<thead>
				<th>Platform</th>
				<th>Page Link</th>
			</thead>
			<tbody>
				<tr>
					<td>TikTok</td>
					<td> <?php echo e($socialLinks->tiktok); ?> </td>
				</tr>
				<tr>
					<td>Instagram</td>
					<td> <?php echo e($socialLinks->instagram); ?> </td>
				</tr>
				<tr>
					<td>Pinterest</td>
					<td> <?php echo e($socialLinks->pinterest); ?> </td>
				</tr>
				<tr>
					<td>LinkedIn</td>
					<td> <?php echo e($socialLinks->linkedin); ?> </td>
				</tr>
				<tr>
					<td>Youtube</td>
					<td> <?php echo e($socialLinks->youtube); ?> </td>
				</tr>
				<tr>
					<td>Twitter</td>
					<td> <?php echo e($socialLinks->twitter); ?> </td>
				</tr>
				<tr>
					<td>Facebook</td>
					<td> <?php echo e($socialLinks->facebook); ?> </td>
				</tr>
			</tbody>
		</table>
		<?php endif; ?>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/social-links/index.blade.php ENDPATH**/ ?>