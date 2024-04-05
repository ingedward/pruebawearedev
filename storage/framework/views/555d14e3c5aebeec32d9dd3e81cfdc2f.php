<?php $__env->startSection('header'); ?>
    <?php if (isset($component)) { $__componentOriginal5c551322cf21afaec98647ff836d5faa = $component; } ?>
<?php $component = App\View\Components\HeaderPage::resolve(['title' => 'Usuarios','path' => 'users.create','button' => 'Agregar usuario','description' => 'Gestion de usuarios del sistema'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <div class="table">
        <div class="min-w-min">
            <div class="users__table--header">
                <h4>ID</h4>
                <h4>Nombre</h4>
                <h4 class="col-span-2">Correo</h4>
                <h4>Rol</h4>
                <h4>Acciones</h4>
            </div>
            <div class="divider"></div>
            <div class="space-y-4">
                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <form method="POST" action="<?php echo e(route('users.destroy', $user->id )); ?>" class="users__table--items">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <p>#<?php echo e($user->id); ?></p>  
                        <p><?php echo e($user->name); ?></p>
                        <p class="col-span-2"><?php echo e($user->email); ?></p>
                        <p><?php echo e($user->role_id == '1' ? 'Admin' : 'Empleado'); ?></p>
                        <div class=" flex items-center gap-4">
                            <a href="" class="btn-primary-icon">
                                <i class="uil uil-pen"></i>
                            </a>
                            <button class="btn-danger-icon" type="submit">
                                <i class="uil uil-trash-alt"></i>
                            </button>
                        </div>
                    </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-center">
                        No hay usuarios
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/users/index.blade.php ENDPATH**/ ?>