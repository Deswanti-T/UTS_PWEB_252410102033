

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <h1>Halo, <?php echo e($username); ?>! 👋</h1>
        <p>Selamat datang di dashboard Kop(i) Des(i) yaa. Dari sini kamu bisa melihat profil dan mengelola menu kafe Des(i).</p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\deswanti\Documents\UTS_PWEB_252410102033\resources\views/dashboard.blade.php ENDPATH**/ ?>