<?php if (isset($component)) { $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AuthLayout::class, []); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    
    <?php if(session('status')): ?>
        <p style="color:red"><?php echo e(session("status")); ?></p>
    <?php endif; ?>
        <form action="<?php echo e(route('login')); ?>" method="post" autocomplete="off">
            <?php echo csrf_field(); ?>
            <label for="email">Email</label><br>
            <input class="fill_data" type="email" name="email" id="email" required><br><br>

            <label for="password">Password</label><br>
            <input class="fill_data" type="password" name="password" id="password" required><br><br>

            <input type="checkbox" id="rem" name="remember">
            <label for="rem">Remember me</label><br><br>

            <div>
                <div class="submit">
                    <a href="<?php echo e(route('register')); ?>">Create an account</a>
                    <input type="submit" value="LOG IN">
                </div>
            </div>
        </form>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3)): ?>
<?php $component = $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3; ?>
<?php unset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3); ?>
<?php endif; ?><?php /**PATH C:\Audrey e-com\laravel-8-ecommerce\resources\views/auth/login.blade.php ENDPATH**/ ?>