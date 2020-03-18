<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $empresas->id }}</p>
</div>

<!-- Nombre Empresa Field -->
<div class="form-group">
    {!! Form::label('nombre_empresa', 'Nombre Empresa:') !!}
    <p>{{ $empresas->nombre_empresa }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $empresas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $empresas->updated_at }}</p>
</div>

