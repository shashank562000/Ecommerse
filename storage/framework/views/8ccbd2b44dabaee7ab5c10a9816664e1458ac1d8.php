

<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-header">
		<h3><?php echo e(isset($product) ? 'Update Product' : 'Add Product'); ?></h3>
	</div>
	<div class="card-body">
		<!-- product images -->
		<div class="row justify-content-around">
			<?php if(isset($product)): ?>
				<?php $__currentLoopData = $product->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="form-group">
						<img src="/storage/<?php echo e($image->images); ?>" style="width: 200px;">
						<form action="<?php echo e(route('destroyImage', $image->id)); ?>" method="post">
							<?php echo csrf_field(); ?>
							<?php echo method_field('DELETE'); ?>
							<button type="submit" class="btn btn-danger mt-3">Delete Image</button>
						</form>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>
		</div>
		<!-- product attributes start-->
		<?php if(isset($attributes)): ?>
		    <table class="table table-dark table-bordered table-hover">
    			<thead>
    				<th>Attribute Name</th>
    				<th>Attribute Value</th>
    				<th>Delete</th>
    			</thead>
    			<tbody>
    				<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $at): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    				<tr>
    					<td><?php echo e($at->attribute_name); ?></td>
    					<td><?php echo e($at->attribute_value); ?></td>
    					<td>
    						<form action="<?php echo e(route('destroyAttribute', $at->id)); ?>" method="post">
    							<?php echo csrf_field(); ?>
    							<?php echo method_field('DELETE'); ?>
    							<button type="submit" class="btn btn-danger btn-sm">Delete</button>
    						</form>
    					</td>
    				</tr>
    				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    			</tbody>
    		</table>
		<?php endif; ?>
		<!-- product attributes end-->
		<form action="<?php echo e(isset($product) ? route('products.update', $product->slug) : route('products.store')); ?>" method="post" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<?php if(isset($product)): ?>
				<?php echo method_field('PATCH'); ?>
			<?php endif; ?>
			<div class="row justify-content-between m-auto">
				<!-- product name -->
				<div class="form-group">
					<label for="name">Product Name</label>
					<input type="text" name="name" id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(isset($product) ? $product->name :  old('name')); ?>">

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
				<!-- product code -->
				<div class="form-group">
					<label for="code">Product Code</label>
					<input type="text" name="code" id="code" class="form-control <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(isset($product) ? $product->code : old('code')); ?>">

					<?php $__errorArgs = ['code'];
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
				<!-- product category -->
				<div class="form-group">
					<label for="category_id">Product Category</label>
					<select name="category_id" id="category_id" class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
						<?php if(isset($product)): ?>
							<option selected value="<?php echo e($product->category->id); ?>"><?php echo e($product->category->name); ?></option>
						<?php endif; ?>
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>

					<?php $__errorArgs = ['category'];
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
				<!-- product sub-category -->
				<div class="form-group">
					<label for="sub_category_id">Sub-Category (Optional)</label>
					<select name="sub_category_id" id="sub_category_id" class="form-control <?php $__errorArgs = ['sub_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
						<?php if(isset($product)): ?>
							<?php if($product->sub_category_id != null): ?>
								<option selected value="<?php echo e($product->subCategory->id); ?>"><?php echo e($product->subCategory->name); ?></option>
							<?php endif; ?>
						<?php endif; ?>
						<?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>

					<?php $__errorArgs = ['sub_category_id'];
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
			</div>
			<!-- product description -->
			<div class="form-group">
				<label for="description">Product Description</label>
				<textarea type="text" name="description" id="description" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(isset($product) ? $product->description : old('description')); ?></textarea>

				<?php $__errorArgs = ['description'];
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
			<div class="row justify-content-between m-auto">
				<!-- product images -->
				<div class="form-group">
					<label for="images">Product Image</label>
					<input type="file" name="images[]" id="images" class="form-control <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" multiple>

					<?php $__errorArgs = ['images'];
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
				<!-- product price -->
				<div class="form-group">
					<label for="price">Product Price</label>
					<input type="decimal" name="price" id="price" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(isset($product) ? $product->price : old('price')); ?>">

					<?php $__errorArgs = ['price'];
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
				<!-- product qty -->
				<div class="form-group">
					<label for="quantity">Product Quantity</label>
					<input type="number" name="quantity" id="quantity" class="form-control <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(isset($product) ? $product->quantity : old('quantity')); ?>">

					<?php $__errorArgs = ['quantity'];
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
			</div>
			<!-- product status -->
			<div class="row ml-2">
				<!-- product on sale -->
				<div class="form-group">
					<label for="on_sale">On Sale</label>
					<select name="on_sale" id="on_sale" class="form-control <?php $__errorArgs = ['on_sale'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
						<option value="0">NO</option>
						<option value="1">YES</option>
					</select>

					<?php $__errorArgs = ['on_sale'];
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
				<!-- product on sale -->
				<div class="form-group ml-5">
					<label for="is_new">New Product</label>
					<select name="is_new" id="is_new" class="form-control <?php $__errorArgs = ['is_new'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
						<option value="0">NO</option>
						<option value="1">YES</option>
					</select>

					<?php $__errorArgs = ['is_new'];
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
			</div>
			<!-- product seo start -->
			<div class="form-group">
				<label for="meta_description">Product Meta Description</label>
				<textarea name="meta_description" class="form-control" placeholder="Make your product visible on search engine by describing your product..."><?php echo e(isset($product) ?  $product->meta_description : ''); ?></textarea>
			</div>
			<div class="form-group">
				<label for="meta_keywords">Product Meta Keywords</label>
				<textarea name="meta_keywords" class="form-control" placeholder="Seperate keywords using comma..."><?php echo e(isset($product) ? $product->meta_keywords : ''); ?></textarea>
			</div>
			<!-- product seo start -->

			<!-- products attributes start -->
			<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('attribute')->dom;
} elseif ($_instance->childHasBeenRendered('arlV1P2')) {
    $componentId = $_instance->getRenderedChildComponentId('arlV1P2');
    $componentTag = $_instance->getRenderedChildComponentTagName('arlV1P2');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('arlV1P2');
} else {
    $response = \Livewire\Livewire::mount('attribute');
    $dom = $response->dom;
    $_instance->logRenderedChild('arlV1P2', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
			
			<!-- products attributes end -->

			<!-- product add btn -->
			<div class="form-group">
				<button class="btn btn-primary"><?php echo e(isset($product) ? 'Update Product Details': 'Add Product'); ?></button>
			</div>
		</form>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\Ecomerce\resources\views/admin/products/create.blade.php ENDPATH**/ ?>