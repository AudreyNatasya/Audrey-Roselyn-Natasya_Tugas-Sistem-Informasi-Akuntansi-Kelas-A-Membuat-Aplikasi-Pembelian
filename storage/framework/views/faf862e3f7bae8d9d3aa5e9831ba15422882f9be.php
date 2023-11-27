<a href="<?php echo e(route('shop', ['category' => $cate->id])); ?>" class="category" style="background-image: url('<?php echo e(asset('storage/'.$cate->image)); ?>')">
    <div class="screen"></div>
    <h3><?php echo e(ucfirst($cate->title)); ?></h3>
</a><?php /**PATH C:\Audrey e-com\laravel-8-ecommerce\resources\views/components/category.blade.php ENDPATH**/ ?>