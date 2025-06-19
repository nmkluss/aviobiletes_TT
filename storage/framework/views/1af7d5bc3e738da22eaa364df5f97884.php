<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4"><?php if(auth()->user()->role === 'admin'): ?> Admin <?php else: ?> User <?php endif; ?> Dashboard</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                <tr>
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">Flight Number</th>
                    <th class="px-4 py-2 border">Destination</th>
                    <th class="px-4 py-2 border">Departure Time</th>
                    <th class="px-4 py-2 border">Status</th>
                    <?php if(auth()->user()->role === 'admin'): ?>
                        <th class="px-4 py-2 border">Manage</th>
                    <?php endif; ?>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-4 py-2 border"><?php echo e($flight->id); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->flight_number); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->destination); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->departure_time); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->status); ?></td>
                        <?php if(auth()->user()->role === 'admin'): ?>
                            <td class="px-4 py-2 border">
                                <a href="<?php echo e(route('flights.edit', $flight->id)); ?>" class="text-blue-600 hover:underline">Edit</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gatii\Desktop\TTapp\ttprogramma\resources\views/user/dashboard.blade.php ENDPATH**/ ?>