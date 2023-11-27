<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('style', null, []); ?> 
        <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
     <?php $__env->endSlot(); ?>

    

    <section class="hero">
        <div class="hero-inner">
            <h1 class="m-0">Science Shop</h1>
            <h2>start shopping for your next science project</h2>
            <a class="d-b" href="<?php echo e(route('shop')); ?>">Shop Now</a>
        </div>
    </section>
    <section class="featured-products _container">
        <h2 style="font-family: 'Roboto', sans-serif;">Title | featured products | 80% off</h2>
        <div class="home-grid">
            <?php echo $__env->renderEach('components.product', $products, 'product'); ?>
        </div>
        <a href="<?php echo e(route('shop')); ?>" class="cta">View more products</a>
    </section>
    <section class="categories _container">
        <h2 style="font-family: 'Roboto', sans-serif;">Title | product categories</h2>
        <div class="home-grid">
            <?php echo $__env->renderEach('components.category', $categories, 'cate'); ?>
        </div>
    </section>

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Audrey e-com\laravel-8-ecommerce\resources\views/home.blade.php ENDPATH**/ ?>