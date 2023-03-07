

<?php $__env->startSection('content'); ?>

<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-dectoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">Categories</li>
	</ol>
	
</nav>

<div class="card">
	<div class="card-header d-flex justify-content-between">
		<span>Categories</span>
		<a href="<?php echo e(route('categories.create')); ?>" class="btn btn-dark">Add Category</a>
	</div>
	<div class="card-body">
		<table class="table table-bordered table-dark">
			<thead>
				<th>#</th>
				<th>Category Name</th>
				<th>Slug</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($index+1); ?></td>
					<td><?php echo e($cat->name); ?></td>
					<td><?php echo e($cat->slug); ?></td>
					<td><a href="<?php echo e(route('categories.edit', $cat->slug)); ?>" class="btn btn-primary btn-sm">Edit</a></td>
					<td>
						<form action="<?php echo e(route('categories.destroy', $cat->slug)); ?>" method="post">
							<?php echo csrf_field(); ?>
							<?php echo method_field('DELETE'); ?>
							<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>