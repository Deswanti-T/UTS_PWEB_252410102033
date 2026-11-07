

<?php $__env->startSection('title', 'Pengelolaan Menu'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .page-header {
        margin-bottom: 20px;
    }
    .page-header p {
        color: #666;
        margin-top: 5px;
    }
    .table-menu th:first-child,
    .table-menu td:first-child {
        text-align: center;
        width: 60px;
    }
</style>

<div class="card">
    <div class="page-header">
        <h1>📋 Pengelolaan Menu</h1>
        <p>Daftar menu Kop(i) Des(i) yang dikelola oleh <strong><?php echo e($username); ?></strong>.</p>
    </div>

    <div class="table-wrap">
        <table class="table-menu">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($index + 1); ?></td>
                        <td><?php echo e($menu['nama']); ?></td>
                        <td><?php echo e($menu['kategori']); ?></td>
                        <td>Rp <?php echo e(number_format($menu['harga'], 0, ',', '.')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">Belum ada data menu.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\deswanti\Documents\UTS_PWEB_252410102033\resources\views/pengelolaan.blade.php ENDPATH**/ ?>