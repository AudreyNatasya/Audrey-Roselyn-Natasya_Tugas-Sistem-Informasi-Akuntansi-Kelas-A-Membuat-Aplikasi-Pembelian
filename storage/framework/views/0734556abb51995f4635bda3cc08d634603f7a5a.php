<header>
    <nav class="flex_align _container">
        <a class="logo-link d-b" href="<?php echo e(route('home')); ?>"><img class="d-b" src="<?php echo e(asset('img/logo.jpg')); ?>" alt="logo"></a>
        <form class="ml-auto one-form" action="<?php echo e(route('shop')); ?>" method="GET">
            <input type="search" name="search" placeholder="Search for products..." value="<?php echo e($search ?? ''); ?>">
            <button type="submit">
                <i class="material-icons">search</i>
            </button>
        </form>
        <ul class="flex_align">
            <li>
                <a style="width: 2rem" class="logo-link d-b" href="<?php echo e(route('login')); ?>">
                    <?php if(auth()->check()): ?>
                        <span class="material-icons">perm_identity</span>
                    <?php else: ?>
                        Login
                    <?php endif; ?>
                </a>
            </li>
            <li class="space-lr">
                <a class="notification-link" href="<?php echo e(route('cart')); ?>">
                    <span class="material-icons">shopping_cart</span>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if($product_count = auth()->user()->carts()->firstOrCreate(['status' => 'N'])->products->sum('pivot.quantity')): ?>
                            <span class='badge'><?php echo e($product_count); ?></span>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?>
                        
                        <?php if(request()->cookie('products') && $product_count = array_sum(json_decode(request()->cookie('products'), true))): ?>
                            <span class='badge'><?php echo e($product_count); ?></span>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                </a>
            </li>
        </ul>
    </nav>
</header><?php /**PATH C:\Audrey e-com\laravel-8-ecommerce\resources\views/components/header.blade.php ENDPATH**/ ?>