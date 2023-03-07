<div>
	<div class="row justify-content-start m-auto">
		<h4 class="mr-3">Add Product Attributes</h4>
		<i wire:click="increment" class="fas fa-plus ml-5 mt-2" style="cursor: pointer; color: #00FF00;"></i>
	</div>
	<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="row justify-content-start m-auto">

		<div class="form-group">
			<label for="attribute_name">Attribute Name</label>
			<select name="attribute_name[]" id="attribute_name" class="form-control">
				<option>Size</option>
				<option>Color</option>
				<option>Weight</option>
				<option>Pieces</option>
			</select>
		</div>

		<div class="form-group ml-5">
			<label for="attribute_value">Attribute Value</label>
			<input type="text" name="attribute_value[]" id="attribute_value" class="form-control" placeholder="<?php echo e($attribute); ?>Green, 1 Kg, 32, 10">
		</div>
		<i wire:click="decrement(<?php echo e($loop->index); ?>)" class="fas fa-times ml-2" style="cursor: pointer; margin-top: 40px; color: red;"></i>
	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH E:\Task\Ecomerce\resources\views/livewire/attribute.blade.php ENDPATH**/ ?>