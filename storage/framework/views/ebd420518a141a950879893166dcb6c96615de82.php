

<?php $__env->startSection('seo'); ?>

<title>Welcome To | <?php echo e($systemName->name); ?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo e($systemName->description); ?>">
<meta name="keywords" content="<?php echo e($systemName->name); ?>, <?php echo e($systemName->name); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <?php if($slides->count() > 0): ?>
    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="hs-item set-bg" data-setbg="/storage/<?php echo e($slide->image); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 text-white">
                            <span><?php echo e($slide->heading); ?></span>
                            <p><?php echo e(Str::limit($slide->description, 100)); ?></p>
                            <a href="/<?php echo e($slide->link); ?>" class="site-btn sb-line">BUY NOW</a>
                            <a href="<?php echo e(route('contact-us')); ?>" class="inquire site-btn sb-white">INQUIRE</a>
                        </div>
                    </div>
                    <?php if($slide->from_price != null): ?>
                    <div class="offer-card text-white">
                        <span>from</span>
                        <h3>$<?php echo e($slide->from_price); ?></h3>
                        <p>SHOP NOW</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->



    <!-- Features section -->
    <section class="features-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="<?php echo e(asset('frontend/img/icons/1.png')); ?>" alt="#">
                        </div>
                        <h4>Fast Secure Payments</h4>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="<?php echo e(asset('frontend/img/icons/2.png')); ?>" alt="#">
                        </div>
                        <h4 class="text-white">Premium Products</h4>
                    </div>
                </div>
                <div class="col-md-4 p-0 feature">
                    <div class="feature-inner">
                        <div class="feature-icon">
                            <img src="<?php echo e(asset('frontend/img/icons/3.png')); ?>" alt="#">
                        </div>
                        <h4>Affordable Delivery</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features section end -->
    <?php endif; ?>


    <!-- letest product section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h3>LATEST PRODUCTS</h3>
            </div>
            <div class="product-slider owl-carousel">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="<?php echo e(route('single-product', $p->slug)); ?>"><p><?php echo e($p->name); ?></p></a> 
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!-- letest product section end -->



    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h3>BROWSE TOP SELLING PRODUCTS</h3>
            </div>
            <ul class="product-filter-menu">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('frontendCategory', $cat->slug)); ?>"><?php echo e($cat->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <?php if($p->on_sale == 1): ?>
                            <div class="tag-sale">ON SALE</div>
                            <?php endif; ?>
                            <?php if($p->is_new == 1): ?>
                            <div class="tag-new">New</div>
                            <?php endif; ?>
                            <a href="<?php echo e(route('single-product', $p->slug)); ?>">
                                <a href="<?php echo e(route('single-product', $p->slug)); ?>">
                                <?php if($p->photos->count() > 0): ?>
                                    <img src="/storage/<?php echo e($p->photos->first()->images); ?> " alt="">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('frontend/img/no-image.png')); ?>" alt="">
                                <?php endif; ?>
                            </a>
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
                            <p> <?php echo e($p->name); ?> </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if($products->count() > 8): ?>
                <div class="text-center pt-5">
                    <a href="<?php echo e(route('frontendCategories')); ?>" class="site-btn sb-line sb-dark">VIEW MORE</a>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- Product filter section end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\Ecomerce\resources\views/welcome.blade.php ENDPATH**/ ?>