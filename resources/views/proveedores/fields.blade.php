<!-- Nombre Proveedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_proveedor', 'Nombre Proveedor:') !!}
    {!! Form::text('nombre_proveedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('proveedores.index') }}" class="btn btn-default">Cancel</a>
</div>
