<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productos->id }}</p>
</div>

<!-- Nombre Producto Field -->
<div class="form-group">
    {!! Form::label('nombre_producto', 'Nombre Producto:') !!}
    <p>{{ $productos->nombre_producto }}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{{ $productos->valor }}</p>
</div>

<!-- Unidades Field -->
<div class="form-group">
    {!! Form::label('unidades', 'Unidades:') !!}
    <p>{{ $productos->unidades }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productos->updated_at }}</p>
</div>

