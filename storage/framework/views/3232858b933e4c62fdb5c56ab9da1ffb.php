<?php $__env->startSection('content'); ?>
    <h1>Flights List</h1>

    <form method="GET" action="<?php echo e(route('lidojumi.index')); ?>" class="mb-4">
        <div class="row">
            <div class="col">
                <input type="text" name="no" value="<?php echo e(request('no')); ?>" class="form-control" placeholder="No (From)">
            </div>
            <div class="col">
                <input type="text" name="uz" value="<?php echo e(request('uz')); ?>" class="form-control" placeholder="Uz (To)">
            </div>
            <div class="col">
                <input type="text" name="lidojuma_numurs" value="<?php echo e(request('lidojuma_numurs')); ?>" class="form-control" placeholder="Flight Number">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="<?php echo e(route('lidojumi.index')); ?>" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>


    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Flight Number</th>
            <th>From</th>
            <th>To</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($flight->id); ?></td>
                <td><?php echo e($flight->lidojuma_numurs); ?></td>
                <td><?php echo e($flight->no); ?></td>
                <td><?php echo e($flight->uz); ?></td>
                <td><?php echo e($flight->izlidosanas_laiks); ?></td>
                <td><?php echo e($flight->nosesanas_laiks); ?></td>
                <td><?php echo e($flight->cena); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="7">No flights found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>

    <?php echo e($flights->withQueryString()->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gatii\Desktop\TTapp\ttprogramma\resources\views/lidojumi/index.blade.php ENDPATH**/ ?>