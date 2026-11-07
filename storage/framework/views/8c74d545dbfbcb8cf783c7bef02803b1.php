<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['username' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['username' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<style>
    .navbar {
        background-color: #3b2a20;
        color: #ffffff;
        padding: 14px 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
    }
    .navbar-brand { font-size: 1.3rem; font-weight: bold; }
    .navbar-menu { display: flex; gap: 18px; }
    .navbar-menu a { color: #f6efe7; text-decoration: none; }
    .navbar-menu a.logout-btn { color: #e0a96d; }
</style>

<nav class="navbar">
    <div class="navbar-brand">
        ☕ Kop(i) Des(i)
    </div>

    <?php if($username): ?>
        <div class="navbar-menu">
            <a href="/dashboard?username=<?php echo e($username); ?>">Dashboard</a>
            <a href="/profile?username=<?php echo e($username); ?>">Profil</a>
            <a href="/pengelolaan?username=<?php echo e($username); ?>">Pengelolaan</a>
            <a href="/" class="logout-btn">Keluar</a>
        </div>
    <?php endif; ?>
</nav><?php /**PATH C:\Users\deswanti\Documents\UTS_PWEB_252410102033\resources\views/components/navbar.blade.php ENDPATH**/ ?>