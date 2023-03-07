

<?php $__env->startSection('seo'); ?>

<title><?php echo e($product->name); ?> | <?php echo e($systemName->name); ?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo e($product->meta_description); ?>">
<meta name="keywords" content="<?php echo e($product->meta_keywords); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4><?php echo e($product->category->name); ?></h4>
			<div class="site-pagination">
				<a href="<?php echo e(route('welcome')); ?>">Home</a> /
				<a href="">Shop</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="<?php echo e(route('frontendCategories')); ?>"> &lt;&lt; Back to Categories</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						
						<?php if($singleImage != null): ?>
                            <img class="product-big-img" src="/storage/<?php echo e($singleImage->images); ?>" alt="">
                        <?php else: ?>
                            <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" alt="">
                        <?php endif; ?>
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<?php $__currentLoopData = $product->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="pt active" data-imgbigurl="
								<?php if($image->count() > 0): ?>
		                                /storage/<?php echo e($image->images); ?>

		                            <?php else: ?>
		                                <?php echo e(asset('frontend/img/no-image.png')); ?>

		                            <?php endif; ?>
								">	
									<?php if($image->count() > 0): ?>
		                                <img src="/storage/<?php echo e($image->images); ?>" alt="">
		                            <?php else: ?>
		                                <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" alt="">
		                            <?php endif; ?>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo e($product->name); ?></h2>
					<h3 class="p-price">$<?php echo e($product->price); ?></h3>
					<?php if($pieces): ?>
						<h4 class="p-stock">Pieces: 
							<span>
								<?php echo e($pieces->attribute_value); ?>

							</span>
						</h4>
					<?php endif; ?>
					<h4 class="p-stock">Availability: 
						<span>
							<?php if($product->inStock()): ?>
								In Stock
							<?php else: ?>
								Out Of Stock
							<?php endif; ?>
						</span>
					</h4>
					<!-- Add to cart logic -->
					<form action="<?php echo e(route('cart.store')); ?>" method="post">
						<?php echo csrf_field(); ?>
					<?php if(!empty($color)): ?>
						<div class="fw-size-choose">
							<p>Color</p>
							<?php $__currentLoopData = $color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="sc-item">
									<input type="radio" name="Color" id="<?php echo e($c->attribute_value); ?>" value="<?php echo e($c->attribute_value); ?>">
									<label for="<?php echo e($c->attribute_value); ?>" class="choose-color"><?php echo e($c->attribute_value); ?></label>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>

					<?php if(!empty($sizes)): ?>
						<div class="fw-size-choose">
							<p>Sizes</p>
							<?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="sc-item">
									<input type="radio" name="Size" id="<?php echo e($size->attribute_value); ?>" value="<?php echo e($size->attribute_value); ?>">
									<label for="<?php echo e($size->attribute_value); ?>"><?php echo e($size->attribute_value); ?></label>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					<?php endif; ?>

                    
						<div class="quantity">
							<p>Quantity</p>
	                        <div class="pro-qty"><input type="text" name="quantity" value="1"></div>
	                    </div>
						<input type="hidden" name="id" value="<?php echo e($product->id); ?>">
						<input type="hidden" name="name" value="<?php echo e($product->name); ?>">
						<input type="hidden" name="price" value="<?php echo e($product->price); ?>">
						<button type="submit" class="site-btn">Add To Cart</button>
					</form>

					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Description</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p><?php echo e($product->description); ?></p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p></p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="product-item">
					<div class="pi-pic">
						<a href="<?php echo e(route('single-product', $related->slug)); ?>">
							<?php if($related->photos->count() > 0): ?>
                                <img src="/storage/<?php echo e($related->photos->first()->images); ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" alt="">
                            <?php endif; ?>
						</a>
						<div class="pi-links">
							<form action="<?php echo e(route('cart.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($related->id); ?>">
                                <input type="hidden" name="name" value="<?php echo e($related->name); ?>">
                                <input type="hidden" name="price" value="<?php echo e($related->price); ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></button>
                            </form>
                            <form action="<?php echo e(route('wishlist.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($related->id); ?>">
                                <input type="hidden" name="name" value="<?php echo e($related->name); ?>">
                                <input type="hidden" name="price" value="<?php echo e($related->price); ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="wishlist-btn"><i class="flaticon-heart"></i></button>
                            </form>
						</div>
					</div>
					<div class="pi-text">
						<h6>$<?php echo e($related->price); ?></h6>
						<p><?php echo e($related->name); ?> </p>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\Ecomerce\resources\views/product/show.blade.php ENDPATH**/ ?>