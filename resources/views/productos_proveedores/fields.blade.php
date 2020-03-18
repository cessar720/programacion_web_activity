<!-- Fk Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_producto', 'Fk Producto:') !!}
    {!! Form::text('fk_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Fk Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fk_proveedor', 'Fk Proveedor:') !!}
    {!! Form::text('fk_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('productosProveedores.index') }}" class="btn btn-default">Cancel</a>
</div>
