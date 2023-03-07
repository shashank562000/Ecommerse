

<?php $__env->startSection('seo'); ?>

<title>
	<?php if(auth()->check()): ?> 
		<?php echo e(auth()->user()->name); ?> 's Wishlist
	<?php else: ?>
		Wishlist
	<?php endif; ?>
</title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo e($systemInfo->description); ?>">
<meta name="keywords" content="<?php echo e($systemInfo->description); ?>, <?php echo e($systemInfo->description); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- cart section end -->
<section class="cart-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="cart-table">
					<h3>Your Wishlist</h3>
					<div class="cart-table-warp">
						<table>
						<thead>
							<tr>
								<th class="product-th">Product</th>
								<th class="quy-th">Quantity</th>
								<th class="size-th">Size</th>
								<th class="total-th">Price</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = Cart::instance('wishlist')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="product-col">
									<a href="<?php echo e(route('single-product', $item->model->slug)); ?>">
										<?php if($item->model->photos->count() > 0): ?>
			                               <img src="/storage/<?php echo e($item->model->photos->first()->images); ?>" alt="">
			                            <?php else: ?>
			                                <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" alt="">
			                            <?php endif; ?>
									</a>
									<div class="pc-title">
										<h4><?php echo e($item->model->name); ?></h4>
										<p>$<?php echo e($item->model->price); ?></p>
									</div>
								</td>
								<td class="quy-col">
									<div class="quantity">
										<form action="<?php echo e(route('wishlist.update', $item->rowId)); ?>" method="post">
											<?php echo csrf_field(); ?>
											<?php echo method_field('PATCH'); ?>
											<div class="pro-qty">
												<input type="text" name="quantity" value="<?php echo e($item->qty); ?>">
											</div>
											<button style="border: none;">
												<i class="cancel fas fa-check ml-2" title="Update Product Qty" style="cursor: pointer; color: #00FF00;"></i>
											</button>
										</form>
                					</div>
								</td>
								<td class="size-col"><h4><?php echo e($item->size); ?></h4></td>
								<td class="total-col"><h4>$<?php echo e($item->subtotal); ?></h4></td>
								<td class="total-col">
									<form action="<?php echo e(route('wishlist.destroy', $item->rowId)); ?>" method="post">
										<?php echo csrf_field(); ?>
										<?php echo method_field('DELETE'); ?>
										<button style="border: none;">
											<i class="cancel fas fa-times" title="Remove Product" style="cursor: pointer; color: #f51167;"></i>
										</button>
									</form>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php if(session()->get('coupon') != null): ?>
							<tr>
								<td>Discount (<?php echo e(session()->get('coupon')['name']); ?>)</td>
								<td>
									<form action="<?php echo e(route('coupons.destroy')); ?>" method="post">
										<?php echo csrf_field(); ?>
										<?php echo method_field('DELETE'); ?>
										<button style="border: none;">
											<i class="cancel fas fa-times" title="Remove coupon" style="cursor: pointer; color: #f51167;"></i>
										</button>
									</form>
								</td>
								<td></td>
								<td>- $<?php echo e(session()->get('coupon')['discount']); ?></td>
							</tr>
							<tr>
								<td><strong>New Subtotal</strong></td>
								<td></td>
								<td></td>
								<td><strong>$ <?php echo e($newSubtotal); ?></strong></td>
							</tr>
							<?php endif; ?>
						</tbody>
					</table>
					</div>
					<div class="total-cost">
						<h6>Total <span><?php echo e(Cart::instance('wishlist')->total()); ?></span></h6>
					</div>
				</div>
			</div>
			<div class="col-lg-4 card-right">
				<a href="<?php echo e(route('on-sale')); ?>" class="site-btn">Check Discounts</a>
				<a href="<?php echo e(route('frontendCategories')); ?>" class="site-btn sb-dark">Continue shopping</a>
			</div>
		</div>
	</div>
</section>
<!-- cart section end -->

<!-- Related product section -->
<section class="related-product-section">
	<div class="container">
		<div class="section-title text-uppercase">
			<h2>Might Also Like</h2>
		</div>
		<div class="row">
			<?php $__currentLoopData = $mightAlsoLike; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<?php if($like->on_sale == 1): ?>
                        <div class="tag-sale">ON SALE</div>
                        <?php endif; ?>
                        <?php if($like->is_new == 1): ?>
                        <div class="tag-new">New</div>
                        <?php endif; ?>
						<a href="<?php echo e(route('single-product', $like->slug)); ?>">
							<?php if($like->photos->count() > 0): ?>
                                <img src="/storage/<?php echo e($like->photos->first()->images); ?>" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" alt="">
                            <?php endif; ?>
						</a>
						<div class="pi-links">
							<form action="<?php echo e(route('cart.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($like->id); ?>">
                                <input type="hidden" name="name" value="<?php echo e($like->name); ?>">
                                <input type="hidden" name="price" value="<?php echo e($like->price); ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></button>
                            </form>
                            <form action="<?php echo e(route('wishlist.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($like->id); ?>">
                                <input type="hidden" name="name" value="<?php echo e($like->name); ?>">
                                <input type="hidden" name="price" value="<?php echo e($like->price); ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="wishlist-btn"><i class="flaticon-heart"></i></button>
                            </form>
						</div>
					</div>
					<div class="pi-text">
						<h6>$<?php echo e($like->price); ?></h6>
						<p><?php echo e($like->name); ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<!-- Related product section end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/wishlist.blade.php ENDPATH**/ ?>