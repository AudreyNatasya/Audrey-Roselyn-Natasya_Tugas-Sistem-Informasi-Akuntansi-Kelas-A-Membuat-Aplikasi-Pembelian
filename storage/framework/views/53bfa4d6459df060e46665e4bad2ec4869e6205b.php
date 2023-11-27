<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">

    <title>Beyond</title>
</head>
<body>
    <main>
        <div>
            <a id="logo" href="/">
                <img src="<?php echo e(asset('img/b.png')); ?>" alt="logo">
            </a>
        </div>

        <div class="card">
            <?php echo e($slot); ?>

        </div>
    </main>
</body>
</html><?php /**PATH C:\Audrey e-com\laravel-8-ecommerce\resources\views/layouts/auth.blade.php ENDPATH**/ ?>