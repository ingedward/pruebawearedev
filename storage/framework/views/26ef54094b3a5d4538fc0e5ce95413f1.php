<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        <title>TEST Lider Tecnico</title>
    </head>

    <body>
        <main class="auth__container">
            <section class="auth__content">
                <div class="mb-4 text-center">
                    <?php echo $__env->yieldContent('header'); ?>
                </div>

                <?php echo $__env->yieldContent('content'); ?>
            </section>
            <section class="auth__logo">
                <h1>Control de Inventario</h1>
            </section>
        </main>
    </body>
</html>
<?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/layouts/auth.blade.php ENDPATH**/ ?>