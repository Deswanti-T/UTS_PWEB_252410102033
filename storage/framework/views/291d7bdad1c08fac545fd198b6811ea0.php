

<?php $__env->startSection('title', 'Profil'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .profile-card {
        max-width: 500px;
        margin: 0 auto;
    }
    .profile-table {
        margin-top: 15px;
    }
    .profile-table th {
        width: 35%;
    }
    .back-btn {
        margin-top: 20px;
        display: inline-block;
    }
</style>

<div class="card profile-card">
    <h1>👤 Profil Pengguna</h1>

    <table class="profile-table">
        <tbody>
            <tr>
                <th>Username</th>
                <td><?php echo e($username); ?></td>
            </tr>
            <tr>
                <th>Peran</th>
                <td>Admin Kafe</td>
            </tr>
            <tr>
                <th>Kafe</th>
                <td>Kop(i) Des(i)</td>
            </tr>
        </tbody>
    </table>

    <a href="/dashboard?username=<?php echo e($username); ?>" class="btn back-btn">
        &larr; Kembali ke Dashboard
    </a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\deswanti\Documents\UTS_PWEB_252410102033\resources\views/profile.blade.php ENDPATH**/ ?>