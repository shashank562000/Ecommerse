<nav class="main-navbar">
	<div class="container">
		<!-- menu -->
		<ul class="main-menu">
			<li><a href="/">Home</a></li>
			<li><a href="<?php echo e(route('frontendCategories')); ?>">Our Shop</a>
				<ul class="sub-menu">
					<?php $__currentLoopData = $navCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><a href="<?php echo e(route('frontendCategory', $cat->slug)); ?>"><?php echo e($cat->name); ?></a></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
				</ul>
			</li>
			<li><a href="<?php echo e(route('on-sale')); ?>">On Sale
				<span class="new">Sale</span>
			</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="<?php echo e(route('contact-us')); ?>">Contact</a></li>
			<?php if(auth()->guard()->check()): ?>
			<li><i class="flaticon-profile mr-2  text-light"></i><a href="#"><?php echo e(auth()->user()->name); ?></a>
				<ul class="sub-menu">
					<li><a href="<?php echo e(route('my-profile.edit')); ?>">Settings</a></li>
					<li><a href="<?php echo e(route('my-orders.index')); ?>">My Orders</a></li>
					<?php if(auth()->user()->isAdmin()): ?>
					<li><a href="<?php echo e(route('home')); ?>" target="_blank">Admin Dashboard</a></li>
					<?php endif; ?>
					<li>
						<a href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
						<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
					</li>
				</ul>
			</li>
			<?php else: ?>
			<li><a href="<?php echo e(route('login')); ?>">Signin</a></li>
			<li> <a href="<?php echo e(route('register')); ?>">Signup</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>
<?php /**PATH E:\Task\Ecomerce\resources\views/livewire/nav-bar.blade.php ENDPATH**/ ?>