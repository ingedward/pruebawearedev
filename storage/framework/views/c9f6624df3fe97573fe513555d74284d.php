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
    <main class="flex">
        <nav class="sidebar">
            <div class="mb-8 flex gap-2">
                <img class="max-w-[50px]" src="<?php echo e(URL::asset('images/LogoWEARE.png')); ?>">
                <div>
                    <p class="text-gray-300">
                        Bienvenido 
                        <span class="font-semibold">
                            <?php echo e(auth()->user()->name); ?>

                        </span>
                    </p>
                    <p class="text-sm text-gray-300">
                        <?php echo e(auth()->user()->email); ?>

                    </p>
                </div>
            </div>

            <ul class="sidebar__menu">
                <a href="/" class="sidebar__menu--item">
                    <i class="uil uil-estate"></i>
                    <p >Inicio</p>
                </a>
                <a href="/products" class="<?php echo e(request()->path() == 'products' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item'); ?>">
                    <i class="uil uil-shopping-bag"></i>
                    <p>Productos</p>
                </a>
                <a href="/categories" class="<?php echo e(request()->path() == 'categories' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item'); ?>">
                    <i class="uil uil-clipboard-notes"></i>
                    <p>Categorías</p>
                </a>
                <a href="/categories" class="<?php echo e(request()->path() == 'sales' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item'); ?>">
                    <i class="uil uil-shopping-cart-alt"></i>
                    <p>Ventas</p>
                </a>
                <a href="/users" class="<?php echo e(request()->path() == 'users' ? 'sidebar__menu--item sidebar__menu--active' : 'sidebar__menu--item'); ?>">
                    <i class="uil uil-users-alt"></i>
                    <p>Usuarios</p>
                </a>
            </ul>
            <div class="flex-1"></div>
            <form method="POST" class="w-full" action="<?php echo e(route('auth.logut')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="sidebar__menu--logout">
                    <i class="uil uil-signout"></i>
                    <p>Cerrar Sesion</p>
                </button>
            </form>

        </nav>
        
        <section class="p-8 w-full">
            <?php echo $__env->yieldContent('header'); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </section>

    </main>
</body>
</html>
<?php /**PATH D:\laragon\www\demosLaravel\inventario-laravel-10\resources\views/layouts/app.blade.php ENDPATH**/ ?>