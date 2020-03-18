<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $proveedores->id }}</p>
</div>

<!-- Nombre Proveedor Field -->
<div class="form-group">
    {!! Form::label('nombre_proveedor', 'Nombre Proveedor:') !!}
    <p>{{ $proveedores->nombre_proveedor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $proveedores->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $proveedores->updated_at }}</p>
</div>

