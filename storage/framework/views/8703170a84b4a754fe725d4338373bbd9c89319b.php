

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <table class="table table-bordered table-hover table-dark table-responsive">
        	<thead>
        		<th>Users</th>
        		<th>Orders</th>
        		<th>Products</th>
        		<th>Messages</th>
        		<th>Sales</th>
        	</thead>
        	<tbody>
        		<tr>
        			<td><?php echo e($users); ?></td>
        			<td><?php echo e($orders); ?></td>
        			<td><?php echo e($products); ?></td>
        			<td><?php echo e($messages); ?></td>
        			<td></td>
        		</tr>
        	</tbody>
        </table>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\Ecomerce\resources\views/home.blade.php ENDPATH**/ ?>