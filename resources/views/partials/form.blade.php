@csrf

<div class="form-group">
    <label for="image">Imagen del Servicio</label>
    <input type="file" name="image" class="custom-file-input" id="customFile">
</div>

<div class="form-group">
    <label for="nombre">Nombre del Servicio</label>
    <input type="text" name="titulo" id="nombre" class="form-control" value="{{ old('titulo', $servicio->titulo ?? '') }}">
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion', $servicio->descripcion ?? '') }}</textarea>
</div>

<div class="form-group text-center">
    <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
</div>