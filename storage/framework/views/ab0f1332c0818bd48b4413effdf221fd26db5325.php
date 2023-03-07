

<?php $__env->startSection('content'); ?>
<!-- breadcrumb -->
<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-decoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">Products</li>
	</ol>
	
</nav>

<!-- Dispaly all slides from DB -->
<div class="card">
	<div class="card-header d-flex justify-content-between">
		<span>Slides</span>
		<a href="<?php echo e(route('slides.create')); ?>" class="btn btn-dark">Add Slide</a>
	</div>
	<div class="card-body">
		<table class="table table-dark table-bordered">
			<thead>
				<th>Heading</th>
				<th>Description</th>
				<th>Image</th>
				<th>Link</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($slide->heading); ?></td>
					<td><?php echo e($slide->description); ?></td>
					<td>
						<img src="/storage/<?php echo e($slide->image); ?>" style="border-radius: 100%; width: 25px; height: 25px;">
					</td>
					<td><?php echo e($slide->link); ?></td>
					<td>
						<a href="<?php echo e(route('slides.edit', $slide->id)); ?>" class="btn btn-primary btn-sm">Edit</a>
					</td>
					<td>
						<form action="<?php echo e(route('slides.destroy', $slide->id)); ?>" method="post">
							<?php echo csrf_field(); ?>
							<?php echo method_field('DELETE'); ?>
							<button class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/slides/index.blade.php ENDPATH**/ ?>