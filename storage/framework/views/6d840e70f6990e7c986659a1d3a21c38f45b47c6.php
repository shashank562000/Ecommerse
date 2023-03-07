

<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-header">
		<?php echo e(isset($category) ? "Edit $category->name" : 'Add Category'); ?>

	</div>
	<div class="card-body">
		<form action="<?php echo e(isset($category) ? route('categories.update', $category->slug) : route('categories.store')); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<?php if(isset($category)): ?>
				<?php echo method_field('PATCH'); ?>
			<?php endif; ?>
			<div class="row justify-content-start">
				
				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Add Category" value="<?php echo e(isset($category) ? $category->name : ''); ?>">

					<?php $__errorArgs = ['name'];
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

				<?php if(isset($category)): ?>
					<div class="form-group ml-5">
						<input type="text" name="slug" id="slug" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Add Category" value="<?php echo e(isset($category) ? $category->slug : ''); ?>">

						<?php $__errorArgs = ['slug'];
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
				<?php endif; ?>

				<div class="form-group ml-5">
					<button type="submit" class="btn btn-primary"><?php echo e(isset($category) ? 'Edit Category' : 'Add Category'); ?></button>
				</div>

			</div>
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\Ecomerce\resources\views/admin/categories/create.blade.php ENDPATH**/ ?>