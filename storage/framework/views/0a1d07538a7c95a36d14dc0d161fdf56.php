<?php $__env->startSection('header'); ?>
    <?php if (isset($component)) { $__componentOriginal5c551322cf21afaec98647ff836d5faa = $component; } ?>
<?php $component = App\View\Components\HeaderPage::resolve(['title' => 'Productos','path' => 'products.create','button' => 'Nuevo producto','description' => 'Administración de Productos'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HeaderPage::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c551322cf21afaec98647ff836d5faa)): ?>
<?php $component = $__componentOriginal5c551322cf21afaec98647ff836d5faa; ?>
<?php unset($__componentOriginal5c551322cf21afaec98647ff836d5faa); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-soft-dark p-4 w-full overflow-x-scroll">
        <div class="min-w-min">
            <div class="grid grid-cols-7 gap-8">
                <h4>ID</h4>
                <h4>Imagen</h4>
                <h4>Nombre</h4>
                <h4>Descripción</h4>
                <h4>Stock</h4>
                <h4>Precio</h4>
                <h4>Acciones</h4>
            </div>
            <div class=" border-t border-white/10 my-4"></div>
            <div class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <form method="POST" action="<?php echo e(route('products.destroy', $product->id )); ?>" class="grid grid-cols-7 gap-4 items-center">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <p>#<?php echo e($product->id); ?></p>  
                        <img src="<?php echo e($product->image); ?>" alt="" width="64">
                        <p><?php echo e($product->name); ?></p>
                        <p class="line-clamp-1">
                            <?php echo e($product->description); ?>

                        </p>
                        <p><?php echo e($product->stock); ?> u.</p>
                        <p><?php echo e($product->price); ?> Bs</p>
                        <div class=" flex items-center gap-4">
                            <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="btn-primary-icon">
                                <i class="uil uil-eye"></i>
                            </a>
                            <a href="" class="btn-primary-icon">
                                <i class="uil uil-pen"></i>
                            </a>
                            <button class="btn-danger-icon" type="submit">
                                <i class="uil uil-trash-alt"></i>
                            </button>
                        </div>
                    </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-center">No hay productos</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/products/index.blade.php ENDPATH**/ ?>