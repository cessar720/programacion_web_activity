<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $empresasProductos->id }}</p>
</div>

<!-- Fk Empresa Field -->
<div class="form-group">
    {!! Form::label('fk_empresa', 'Fk Empresa:') !!}
    <p>{{ $empresasProductos->fk_empresa }}</p>
</div>

<!-- Fk Producto Field -->
<div class="form-group">
    {!! Form::label('fk_producto', 'Fk Producto:') !!}
    <p>{{ $empresasProductos->fk_producto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $empresasProductos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $empresasProductos->updated_at }}</p>
</div>

