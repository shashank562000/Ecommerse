<div class="col-xl-6 col-lg-5">
	<div class="header-search-form">
		<input wire:model.debounce.500ms="search" type="text" placeholder="Search on <?php echo e($systemName->name); ?> ....">
		<span><i class="flaticon-search"></i></span>
	</div>

	<?php if(strlen($search) > 2): ?>
		<div class="position-absolute bg-light header-search-result"  style="z-index: 1000;">
			<?php if(count($searchResults) > 0): ?>
				<ul class="sub-menu" style="list-style: none;">
					<?php $__currentLoopData = $searchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="border-bottom mt-1 pb-1">
							<a href="<?php echo e(route('single-product', $result->slug)); ?>" class="d-flex align-items-center justify-content-between ml-3 mr-3">
							<?php if($result->photos->count() > 0): ?>
                               <img src="/storage/<?php echo e($result->photos->first()->images); ?>" width="50">
                            <?php else: ?>
                                <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" width="50">
                            <?php endif; ?>
								<span class="ml-4 text-dark"><?php echo e($result->name); ?></span>
							</a>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			<?php else: ?>
				<span>No results for "<?php echo e($search); ?>"</span>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</div>
<?php /**PATH E:\Task\Ecomerce\resources\views/livewire/search-dropdown.blade.php ENDPATH**/ ?>