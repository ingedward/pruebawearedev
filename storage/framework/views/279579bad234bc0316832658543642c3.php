<?php $__env->startSection('header'); ?>
    <h1>Iniciar Sesion</h1>
    <p>Prueba Lider Técnico WE ARE DEV</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form novalidate method="POST" action="<?php echo e(route('auth.store')); ?>" class="auth__login--form">
        <?php echo csrf_field(); ?>
        
        <?php if(session('mensaje')): ?>
            <p class="text-red-500"><?php echo e(session('mensaje')); ?></p>
        <?php endif; ?>

        <div class="form-control">
            <label for="">Correo electronico: </label>
            <input 
                name="email" 
                type="email" 
                value="<?php echo e(old('email')); ?>"
                placeholder="correo@example.com"
                class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="alert"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-control">
            <label for="">Contraseña: </label>
            <input 
                name="password" 
                type="password" 
                placeholder="Tu contraseña"
                class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> input-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="alert"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button class="btn-primary w-full">Iniciar sesion</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/auth/login.blade.php ENDPATH**/ ?>