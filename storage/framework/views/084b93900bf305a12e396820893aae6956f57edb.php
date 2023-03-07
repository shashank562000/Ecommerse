

<title>Contact</title>
<meta charset="UTF-8">
<meta name="description" content="Login">
<meta name="keywords" content="login, sign">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 100%;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

<?php $__env->startSection('css'); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Contact</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="">Contact</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Get in touch</h3>
					<p><?php echo e($info->address); ?></p>
					<p><?php echo e($info->tel); ?></p>
					<p><?php echo e($info->email); ?></p>
					<!-- flash success messages -->
					<?php if(Session::has('success')): ?>
						<div class="alert alert-primary" role="alert">
							<?php echo e(Session::get('success')); ?>

						</div>
					<?php endif; ?>
					<!-- contact form area -->
					<form action="<?php echo e(route('store-contact')); ?>" method="post" class="contact-form">
						<?php echo csrf_field(); ?>
						<!-- name -->
						<input type="text" name="name" 
							class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
							id="name" placeholder="Your name" 
							value="<?php echo e(old('name')); ?>"
						>
						<!-- email -->
						<input type="text" name="email" 
							class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
							id="email" placeholder="Your e-mail" 
							value="<?php echo e(old('email')); ?>"
						 >
						<!-- subject -->
						<input type="text" name="subject" 
							class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
							id="subject" placeholder="Subject" 
							value="<?php echo e(old('subject')); ?>"
						>
						<!-- message -->
						<textarea name="message" 
							class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
							id="message" 
							placeholder="Message"><?php echo e(old('message')); ?></textarea>
						<!-- google recaptcha -->
						<?php if(config('services.recaptcha.key')): ?>
			                <div class="form-group">
			                    <div class="g-recaptcha"
			                    data-sitekey="<?php echo e(config('services.recaptcha.key')); ?>">
			                    </div>
			                    <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			                        <span class="invalid-feedback mt-3" role="alert">
			                            <strong><?php echo e($message); ?></strong>
			                        </span>
			                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			                </div>
			            <?php endif; ?>
						<button type="submit" class="site-btn">SEND NOW</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map">
			<div id="map"></div>
		</div>
	</section>
	<!-- Contact section end -->


	<!-- Related product section -->
	<section class="related-product-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Your Favorites</h2>
			</div>
			<div class="row">
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-3 col-sm-6">
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
	                                <img src="/storage/<?php echo e($p->photos->first()->images); ?>" alt="">
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
		</div>
	</section>
	<!-- Related product section end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<script>
	// Initialize and add the map -17.819069, 31.078772
	function initMap() {
	  // The location of Uluru
	  var uluru = {lat: -17.819069, lng: 31.078772};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
	      document.getElementById('map'), {zoom: 10, center: uluru});
	  // The marker, positioned at Uluru
	  var marker = new google.maps.Marker({position: uluru, map: map});
	}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(env('GOOGLE_MAPS_KEY')); ?>&callback=initMap">
    </script>
  </body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/contact.blade.php ENDPATH**/ ?>