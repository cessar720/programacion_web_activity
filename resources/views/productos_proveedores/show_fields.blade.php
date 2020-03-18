<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productosProveedores->id }}</p>
</div>

<!-- Fk Producto Field -->
<div class="form-group">
    {!! Form::label('fk_producto', 'Fk Producto:') !!}
    <p>{{ $productosProveedores->fk_producto }}</p>
</div>

<!-- Fk Proveedor Field -->
<div class="form-group">
    {!! Form::label('fk_proveedor', 'Fk Proveedor:') !!}
    <p>{{ $productosProveedores->fk_proveedor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productosProveedores->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productosProveedores->updated_at }}</p>
</div>

