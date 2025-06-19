<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

        <form method="GET" action="<?php echo e(route('admin.dashboard')); ?>" class="mb-6 flex space-x-2">
            <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="Search by flight number or destination"
                   class="border px-3 py-2 rounded-md w-1/3" />

            <select name="sort_by" class="border px-3 py-2 rounded-md">
                <?php $__currentLoopData = ['id' => 'ID', 'lidojuma_numurs' => 'Flight Number', 'uz' => 'Destination', 'izlidosanas_laiks' => 'Departure Time', 'status' => 'Status']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($field); ?>" <?php echo e($sortBy === $field ? 'selected' : ''); ?>><?php echo e($label); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <select name="sort_order" class="border px-3 py-2 rounded-md">
                <option value="asc" <?php echo e($sortOrder === 'asc' ? 'selected' : ''); ?>>Ascending</option>
                <option value="desc" <?php echo e($sortOrder === 'desc' ? 'selected' : ''); ?>>Descending</option>
            </select>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                Filter
            </button>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">Flight Number</th>
                    <th class="px-4 py-2 border">Destination</th>
                    <th class="px-4 py-2 border">Departure Time</th>
                    <th class="px-4 py-2 border">Status</th>
                    <th class="px-4 py-2 border">Manage</th>
                </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border"><?php echo e($flight->id); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->lidojuma_numurs); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->uz); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->izlidosanas_laiks); ?></td>
                        <td class="px-4 py-2 border"><?php echo e($flight->status); ?></td>
                        <td class="px-4 py-2 border">
                            <a href="<?php echo e(route('lidojumi.edit', $flight->id)); ?>" class="text-blue-600 hover:underline">
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-4 py-2 border text-center text-gray-500">
                            No flights found.
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <?php echo e($flights->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gatii\Desktop\TTapp\ttprogramma\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>