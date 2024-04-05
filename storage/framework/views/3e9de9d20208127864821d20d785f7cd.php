<?php $__env->startSection('header'); ?>
    <?php if (isset($component)) { $__componentOriginal5c551322cf21afaec98647ff836d5faa = $component; } ?>
<?php $component = App\View\Components\HeaderPage::resolve(['title' => 'Nueva categoria','path' => 'categories.index','button' => 'Volver','description' => 'Crea una nueva categoria'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('categories.store')); ?>" class="max-w-md mx-auto space-y-4">
        <?php echo csrf_field(); ?>
        <div class="form-control">
            <label for="name">Nombre: </label>
            <input type="text" name="name" placeholder="Nombre de la categoria">
        </div>

        <div class="form-control">
            <label for="name">
                Selecciona una imagen: 
            </label>
            <input type="file" name="image">
        </div>
        <button class="btn-primary w-full">
            Guardar
        </button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/categories/create.blade.php ENDPATH**/ ?>