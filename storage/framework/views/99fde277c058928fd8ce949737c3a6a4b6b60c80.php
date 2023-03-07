

<?php $__env->startSection('content'); ?>

<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-dectoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">Sub-Categories</li>
	</ol>
	
</nav>

<div class="card">
	<div class="card-header">Platform Users</div>
	<div class="card-body">
		<table class="table table-dark table-bordered table-hover">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone</th>
			</thead>
			<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($user->name); ?></td>
					<td><?php echo e($user->email); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<?php echo e($users->links()); ?>

	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/users/index.blade.php ENDPATH**/ ?>