

<?php $__env->startSection('seo'); ?>

<title><?php echo e($category->name); ?> | Product Category</title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo e($category->name); ?>">
<meta name="keywords" content="<?php echo e($category->name); ?>, <?php echo e($category->name); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4><?php echo e($category->name); ?></h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><a href="<?php echo e(route('frontendCategory', $cat->slug)); ?>"><?php echo e($cat->name); ?></a>
									<?php if($cat->subcategories->count() > 0): ?>
									<ul class="sub-menu">
										<?php $__currentLoopData = $cat->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<li><a href="<?php echo e(route('subcategory', $sub->slug)); ?>"><?php echo e($sub->name); ?><span>(<?php echo e($sub->products->count()); ?>)</span></a></li>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</ul>
									<?php endif; ?>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<?php if($p->on_sale == 1): ?>
				                        	<div class="tag-sale">ON SALE</div>
				                        <?php endif; ?>
				                        <?php if($p->is_new == 1): ?>
				                        	<div class="tag-new">New</div>
				                        <?php endif; ?>
									<a href="<?php echo e(route('single-product', $p->slug)); ?>">
										<?php if($p->photos->count() > 0): ?>
			                                <img src="/storage/<?php echo e($p->photos->first()->images); ?> " alt="">
			                            <?php else: ?>
			                                <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" alt="">
			                            <?php endif; ?>
									</a>
									<div class="pi-links">
										<form action="<?php echo e(route('cart.store')); ?>" method="post">
			                                <?php echo csrf_field(); ?>
			                                <input type="hidden" name="id" value="<?php echo e($p->id); ?>">
			                                <input type="hidden" name="name" value="<?php echo e($p->name); ?>">
			                                <input type="hidden" name="price" value="<?php echo e($p->price); ?>">
			                                <input type="hidden" name="quantity" value="1">
			                                <button type="submit" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></button>
			                            </form>
			                            <form action="<?php echo e(route('wishlist.store')); ?>" method="post">
			                                <?php echo csrf_field(); ?>
			                                <input type="hidden" name="id" value="<?php echo e($p->id); ?>">
			                                <input type="hidden" name="name" value="<?php echo e($p->name); ?>">
			                                <input type="hidden" name="price" value="<?php echo e($p->price); ?>">
			                                <input type="hidden" name="quantity" value="1">
			                                <button type="submit" class="wishlist-btn"><i class="flaticon-heart"></i></button>
			                            </form>
									</div>
								</div>
								<div class="pi-text">
									<h6>$<?php echo e($p->price); ?></h6>
									<p><?php echo e($p->name); ?></p>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<?php echo e($products->links()); ?>

				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\Ecomerce\resources\views/category.blade.php ENDPATH**/ ?>