

<?php $__env->startSection('title', 'Crear Servicio'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-header">
            <h4 class="mb-0 text-center">Crear nuevo servicio</h4>
        </div>
        <div class="card-body">
            <?php echo $__env->make('partials.validation-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(route('servicios.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo $__env->make('partials.form', ['btnText' => 'Guardar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\TOPICO BD\Codigo-Laravel\codigo\resources\views/create.blade.php ENDPATH**/ ?>