<!-- Navbar  -->
<header>
    <a href="/" class="logo">
        <i class='bx bxs-movie'></i>Silver Screen Saga
    </a>
    <div class="bx bx-menu" id="menu-icon"></div>

    <!-- menu  -->
    <ul class="navbar">
        <li><a href="/">Home</a></li>
        <li><a href="#movies">Movies</a></li>
        <li><a href="/genre">Genre</a></li>
        <li><a href="/community">Community</a></li>
        <li><a href="/store">Store</a></li>
        <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
                <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
            <?php else: ?>
                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>

                <?php if(Route::has('register')): ?>
                    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </ul>
</header>
<?php /**PATH E:\bayu\coding\php\laravel\PT SSS\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>