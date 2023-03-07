<div class="col-md-5">
    <input wire:model="search" type="text" name="" class="form-control rounded text-center position-relative" placeholder="Search Products">
    <?php if(strlen($search) > 2): ?>
    	<?php if($searchResults->count() > 0): ?>
	    <ul class="list-group position-absolute mt-2 ml-1 col-md-11">
	    	<?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    	<li class="list-group-item  bg-primary border-bottom">
	    		<a href="<?php echo e(route('products.edit', $result->slug)); ?>" class="d-flex justify-content-between  text-decoration-none">
	    			<span class="text-light mt-4 text-capitalize">
	    				<h6 class="font-weight-bold" style="letter-spacing: 2px"><?php echo e($result->name); ?></h6>
	    			</span>
	    			<?php if($result->photos->count() > 0): ?>
                       <img src="/storage/<?php echo e($result->photos->first()->images); ?>" style="width: 50px; height: 50px; border-radius: 100%;">
                    <?php else: ?>
                        <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" width="50">
                    <?php endif; ?>
	    		</a>
	    	</li>
	    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    </ul>
	    <?php else: ?>
	    <div class="position-aboslute">
	    	<span><strong>No results for <?php echo e($search); ?></strong></span>
	    </div>
	    <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH E:\Task\zimcart\resources\views/livewire/admin/search-bar.blade.php ENDPATH**/ ?>