<header class="mb-8 flex justify-between items-center">
    <div>
        <h1>
            <?php echo e($title); ?>

        </h1>
        <p><?php echo e($description); ?></p>
    </div>

    <a class="btn-primary" href=<?php echo e(route($path)); ?>>
        <?php echo e($button); ?>

    </a>
</header>
<?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/components/header-page.blade.php ENDPATH**/ ?>