<section class="footer-section">
	<div class="container">
		<div class="footer-logo text-center">
			<a href="/"><img src="" alt=""></a>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
					<h2>About</h2>
					<p><?php echo e($systemDetail->description); ?></p>
					<img src="<?php echo e(asset('frontend/img/cards.png')); ?>" alt="">
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
					<h2>Useful Links</h2>
					<ul>
						<li><a href="<?php echo e(route('about-us')); ?>">About Us</a></li>
						<li><a href="">Track Orders</a></li>
						<li><a href="">Shipping</a></li>
						<li><a href="<?php echo e(route('contact-us')); ?>">Contact</a></li>
						<li><a href="<?php echo e(route('my-orders.index')); ?>">My Orders</a></li>
					</ul>
					<ul>
						<li><a href="<?php echo e(route('contact-us')); ?>">Support</a></li>
						<li><a href="<?php echo e(route('terms.conditions')); ?>">Terms of Use</a></li>
						<li><a href="<?php echo e(route('privacy.policy')); ?>">Privacy Policy</a></li>
						<li><a href="">Blog</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget about-widget">
					<h2>Blog</h2>
					<div class="fw-latest-post-widget">
						<div class="lp-item">
							<div class="lp-thumb set-bg" data-setbg="<?php echo e(asset('frontend/img/blog-thumbs/1.jpg')); ?>"></div>
							<div class="lp-content">
								<h6>How to order?</h6>
								<span>July 11, 2020</span>
								<a href="#" class="readmore">Read More</a>
							</div>
						</div>
						<div class="lp-item">
							<div class="lp-thumb set-bg" data-setbg="<?php echo e(asset('frontend/img/blog-thumbs/2.jpg')); ?>"></div>
							<div class="lp-content">
								<h6>Returns</h6>
								<span>July 11, 2020</span>
								<a href="#" class="readmore">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget contact-widget">
					<h2>Contact</h2>
					<div class="con-info">
						<span>C.</span>
						<p><?php echo e($systemDetail->name); ?> </p>
					</div>
					<div class="con-info">
						<span>B.</span>
						<p><?php echo e($systemDetail->address); ?> </p>
					</div>
					<div class="con-info">
						<span>T.</span>
						<p><?php echo e($systemDetail->tel); ?></p>
					</div>
					<div class="con-info">
						<span>E.</span>
						<p><?php echo e($systemDetail->email); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="social-links-warp">
		<div class="container">
			 class="container">
			<?php if($socialLinks != null): ?>
			<div class="social-links">
				<?php if($socialLinks->instagram != null): ?>
					<a href="<?php echo e($socialLinks->instagram); ?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i><span>instagram</span></a>
				<?php endif; ?>
				<?php if($socialLinks->pinterest != null): ?>
					<a href="<?php echo e($socialLinks->pinterest); ?>" target="_blank" class="pinterest"><i class="fab fa-pinterest"></i><span>pinterest</span></a>
				<?php endif; ?>
				<?php if($socialLinks->facebook != null): ?>
					<a href="<?php echo e($socialLinks->facebook); ?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i><span>facebook</span></a>
				<?php endif; ?>
				<?php if($socialLinks->twitter != null): ?>
					<a href="<?php echo e($socialLinks->twitter); ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i><span>twitter</span></a>
				<?php endif; ?>
				<?php if($socialLinks->youtube != null): ?>
					<a href="<?php echo e($socialLinks->youtube); ?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i><span>youtube</span></a>
				<?php endif; ?>
				<?php if($socialLinks->linkedin != null): ?>
					<a href="<?php echo e($socialLinks->linkedin); ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i><span>linkedin</span></a>
				<?php endif; ?>
				<?php if($socialLinks->tiktok != null): ?>
					<a href="<?php echo e($socialLinks->tiktok); ?>" target="_blank" class="tiktok"><i class="fab fa-tiktok"></i><span>tiktok</span></a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			

		</div>
	</div>
</section>
<?php /**PATH E:\Task\zimcart\resources\views/livewire/footer-detail.blade.php ENDPATH**/ ?>