

<?php $__env->startSection('content'); ?>

<!-- breadcrumb -->
<nav area-label="breadcrumb">

	<ol class="breadcrumb">
		<a href="<?php echo e(route('home')); ?>" class="text-decoration-none mr-3">
			<li class="breadcrumb-item">Home</li>
		</a>
		<li class="breadcrumb-item active">Orders</li>
	</ol>
	
</nav>

<div class="card">
    <div class="card-header">Orders</div>

    <div class="card-body">

        <table class="table table-bordered table-hover table-dark table-responsive">
        	<thead>
        		<th>Name</th>
        		<th>Phone</th>
        		<th>Address</th>
        		<th>City</th>
        		<th>Amount</th>
        		<th>Pay Method</th>
        		<th>Status</th>
        		<th>Check</th>
        	</thead>
        	<tbody>
        		<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        		<tr>
        			<td><?php echo e($order->billing_fullname); ?></td>
        			<td><?php echo e($order->billing_phone); ?></td>
        			<td><?php echo e($order->billing_address); ?></td>
        			<td><?php echo e($order->billing_city); ?></td>
        			<td>$<?php echo e($order->billing_total); ?></td>
        			<td><?php echo e($order->payment_method); ?></td>
        			<td  class="text-capitalize"><?php echo e($order->status); ?></td>
        			<td>
        				<a href="<?php echo e(route('orders.show', $order->id)); ?>" class="btn btn-success btn-sm">View Order</a>
        			</td>
        		</tr>
        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</tbody>
        </table>
        <?php echo e($orders->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\zimcart\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>