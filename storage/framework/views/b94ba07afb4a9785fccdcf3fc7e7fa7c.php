

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .login-card {
        max-width: 420px;
        margin: 40px auto;
    }
    .login-card p {
        margin-bottom: 16px;
        color: #666;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
    }
</style>

<div class="card login-card">
    <h2>☕ Selamat Datang di Kop(i) Des(i)</h2>
    <p>Silakan masuk untuk mengelola menu kafe Des(i).</p>

    <form action="/dashboard" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username..." required autocomplete="off">
        </div>

        <button type="submit" class="btn" style="width: 100%;">Masuk</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\deswanti\Documents\UTS_PWEB_252410102033\resources\views/login.blade.php ENDPATH**/ ?>