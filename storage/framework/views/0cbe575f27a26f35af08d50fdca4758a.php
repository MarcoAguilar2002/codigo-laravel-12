<?php echo csrf_field(); ?>

<div class="form-group">
    <label for="image">Imagen del Servicio</label>
    <input type="file" name="image" class="custom-file-input" id="customFile">
</div>

<div class="form-group">
    <label for="nombre">Nombre del Servicio</label>
    <input type="text" name="titulo" id="nombre" class="form-control" value="<?php echo e(old('titulo', $servicio->titulo ?? '')); ?>">
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" class="form-control"><?php echo e(old('descripcion', $servicio->descripcion ?? '')); ?></textarea>
</div>

<div class="form-group text-center">
    <button type="submit" class="btn btn-primary"><?php echo e($btnText); ?></button>
</div><?php /**PATH C:\Users\Lenovo\Desktop\TOPICO BD\Codigo-Laravel\codigo\resources\views/partials/form.blade.php ENDPATH**/ ?>