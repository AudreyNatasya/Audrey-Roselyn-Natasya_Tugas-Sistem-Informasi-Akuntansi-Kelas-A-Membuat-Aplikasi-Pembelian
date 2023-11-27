<div style="display: none" class="modal-container">
    <div class="modal">
        <div class="modal-card">
            <h3><?php echo e($title); ?></h3>
            <p><?php echo e($description); ?></p>
            <div class="action flex_align">
                <button onclick="closeModal()" class="modal-cancel"><?php echo e($cancel ?? 'Cancel'); ?></button>
                <button class="modal-ok"><?php echo e($ok); ?></button>
            </div>
        </div>
        <span onclick="closeModal()" class="material-icons">close</span>
    </div>
</div><?php /**PATH C:\Audrey e-com\laravel-8-ecommerce\resources\views/components/modal.blade.php ENDPATH**/ ?>