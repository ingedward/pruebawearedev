<?php $__env->startSection('header'); ?>
    <?php if (isset($component)) { $__componentOriginal5c551322cf21afaec98647ff836d5faa = $component; } ?>
<?php $component = App\View\Components\HeaderPage::resolve(['title' => 'Crea un producto','path' => 'products.index','button' => 'Volver','description' => 'Añade un nuevo producto a tu inventario'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <div class="md:grid grid-cols-2">
        <form class="max-w-md mx-auto space-y-4" enctype="multipart/form-data" method="POST"
            action="<?php echo e(route('products.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-control">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name" placeholder="Nombre del producto">
            </div>

            <div class="form-control">
                <label for="name">Descripción: </label>
                <textarea type="text" id="description" name="description" placeholder="Detalles del producto"></textarea>
            </div>

            <div class="form-control">
                <label for="stock">Stock Disponible: </label>
                <input type="number" id="stock" name="stock" placeholder="Cantidad disponible">
            </div>

            <div class="form-control">
                <label for="price">Precio: </label>
                <input type="number" id="price" name="price" placeholder="Precio en $">
            </div>
            <div class="form-control">
                <label for="name">Selecciona una imagen: </label>
                <input type="file" name="image" id="inputImage">
            </div>

            <div>
                <label for="name">Selecciona una categoría: </label>
                <select class="bg-secondary w-full py-3 px-2 rounded-md" name="category_id" id="category">
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option class="text-white" value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <option>No se encontraron categorías</option>
                    <?php endif; ?>
                </select>
            </div>

            <button type="submit" class="btn-primary w-full">
                Guardar
            </button>
        </form>
        <div>
            <h3 class="text-center text-xl font-bold">
                Imagen del producto
            </h3>
            <p id="imagePreviewText" class="text-center"></p>
            <img id="imagePreview">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/products/create.blade.php ENDPATH**/ ?>