

<?php $__env->startSection('template_title'); ?>
    Welcome To Zimcart Installer
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Zimcart E-commerce
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>
    <p class="text-center">
      Welcome To Zimcart Installer
    </p>
    <p class="text-center">
      <a href="<?php echo e(route('LaravelInstaller::requirements')); ?>" class="button">
        <?php echo e(trans('installer_messages.welcome.next')); ?>

        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
      </a>
    </p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('vendor.installer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/vendor/installer/welcome.blade.php ENDPATH**/ ?>