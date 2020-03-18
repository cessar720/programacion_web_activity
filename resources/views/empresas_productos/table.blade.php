<div class="table-responsive">
    <table class="table" id="empresasProductos-table">
        <thead>
            <tr>
                <th>Fk Empresa</th>
        <th>Fk Producto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($empresasProductos as $empresasProductos)
            <tr>
                <td>{{ $empresasProductos->fk_empresa }}</td>
            <td>{{ $empresasProductos->fk_producto }}</td>
                <td>
                    {!! Form::open(['route' => ['empresasProductos.destroy', $empresasProductos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('empresasProductos.show', [$empresasProductos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('empresasProductos.edit', [$empresasProductos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
