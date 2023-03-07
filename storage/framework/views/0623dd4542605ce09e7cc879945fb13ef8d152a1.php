

<?php $__env->startSection('content'); ?>
<!-- breadcrumb -->
<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-decoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active"><?php echo e($products->count()); ?> Products</li>
	</ol>
	
</nav>
<!-- Upload multiple products -->
<div class="card mb-3">
	<div class="card-body">
		<form action="" method="post"  enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<div class="row">
				<div class="form-group">
					<label>Upload Cases Excel/CSV Sheet</label>
					<input type="file" name="file" id="file" class="form-control <?php $__errorArgs = ['date_reported'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

					<?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
						<div class="alert alert-danger mt-1" role="alert"></div>
						<span><?php echo e($message); ?></span>
					<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				</div>
				<div class="form-group mt-4 ml-5">
					<button type="submit" class="btn btn-primary">Upload Excel File</button>
				</div>
			</div>
		</form>	
	</div>
</div>
<!-- Dispaly all products from DB -->
<div class="card">
	<div class="card-header d-flex justify-content-between">
		<span><?php echo e($products->count()); ?> Products</span>
		<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('admin.search-bar', [])->dom;
} elseif ($_instance->childHasBeenRendered('LJCeBim')) {
    $componentId = $_instance->getRenderedChildComponentId('LJCeBim');
    $componentTag = $_instance->getRenderedChildComponentTagName('LJCeBim');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LJCeBim');
} else {
    $response = \Livewire\Livewire::mount('admin.search-bar', []);
    $dom = $response->dom;
    $_instance->logRenderedChild('LJCeBim', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
		<a href="<?php echo e(route('products.create')); ?>" class="btn btn-dark">Add Product</a>
	</div>
	<div class="card-body">
		<table class="table table-dark table-bordered table-responsive">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Category</th>
				<th>Sub-Category</th>
				<th>Image</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($index + 1); ?></td>
					<td><?php echo e($p->name); ?></td>
					<td><?php echo e($p->category->name); ?></td>
					<td>
						<?php if($p->sub_category_id != null): ?>
						       <?php echo e($p->subCategory->name ?? 'No subcategory'); ?>

						<?php else: ?>
						<p>N/A</p>
						<?php endif; ?>
					</td>
					<td>
						<?php if($p->photos->count() > 0): ?>
                            <img src="/storage/<?php echo e($p->photos->first()->images); ?>" style="border-radius: 100%; width: 25px; height: 25px;">
                        <?php else: ?>
                            <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" style="border-radius: 100%; width: 25px; height: 25px;">
                        <?php endif; ?>
					</td>
					<td><?php echo e($p->price); ?></td>
					<td><?php echo e($p->quantity); ?></td>
					<td>
						<a href="<?php echo e(route('products.edit', $p->slug)); ?>" class="btn btn-primary btn-sm">Edit</a>
					</td>
					<td>
						<form action="<?php echo e(route('products.destroy', $p->slug)); ?>" method="post">
							<?php echo csrf_field(); ?>
							<?php echo method_field('DELETE'); ?>
							<button class="btn btn-danger btn-sm">Delete</button>
						</form>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>

		<div class="pagination">
			<?php echo e($products->links()); ?>

		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/products/index.blade.php ENDPATH**/ ?>