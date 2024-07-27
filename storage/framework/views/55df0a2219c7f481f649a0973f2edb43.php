<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Código Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="row w-100">
                <div class="col d-flex justify-content-center">
                    <div class="<?php echo e(request()->routeIs('home') ? 'activo' : ''); ?>">
                        <a class="nav-link text-white" aria-current="page" href="<?php echo e(route('home')); ?>">Inicio</a>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="<?php echo e(request()->routeIs('nosotros') ? 'activo' : ''); ?>">
                        <a class="nav-link text-white" href="<?php echo e(route('nosotros')); ?>">Nosotros</a>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="<?php echo e(request()->routeIs('servicios*') ? 'activo' : ''); ?>">
                        <a class="nav-link text-white" href="<?php echo e(route('servicios.index')); ?>">Servicios</a>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="<?php echo e(request()->routeIs('contacto') ? 'activo' : ''); ?>">
                        <a class="nav-link text-white" href="<?php echo e(route('contacto')); ?>">Contacto</a>
                    </div>
                </div>

                <?php if(auth()->guard()->guest()): ?>
                <div class="col d-flex justify-content-center">
                    <div class="">
                        <a class="nav-link text-white" href="<?php echo e(route('login')); ?>">Login</a>
                    </div>
                </div>
                <?php else: ?>
                <div class="col d-flex justify-content-center">
                    <div class="">
                        <a href="#" class="nav-link text-white" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<?php if(auth()->guard()->check()): ?>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?>
</form>
<?php endif; ?>
<?php /**PATH C:\Users\Lenovo\Desktop\TOPICO BD\Codigo-Laravel\codigo\resources\views/partials/nav.blade.php ENDPATH**/ ?>