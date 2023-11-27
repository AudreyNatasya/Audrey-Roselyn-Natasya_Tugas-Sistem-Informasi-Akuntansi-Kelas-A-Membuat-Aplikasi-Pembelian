<a href="<?php echo e(route('product', ['product' => $product->id])); ?>" class="product_card">
    <div>
        <img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="<?php echo e(ucfirst($product->title)); ?>">
    </div>
    <h3><?php echo e(ucfirst($product->title)); ?></h3>
    <p><?php echo e("$".$product->price); ?></p>
</a><?php /**PATH C:\Audrey e-com\laravel-8-ecommerce\resources\views/components/product.blade.php ENDPATH**/ ?>