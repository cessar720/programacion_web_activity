<div class="table-responsive">
    <table class="table" id="productosProveedores-table">
        <thead>
            <tr>
                <th>Fk Producto</th>
        <th>Fk Proveedor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productosProveedores as $productosProveedores)
            <tr>
                <td>{{ $productosProveedores->fk_producto }}</td>
            <td>{{ $productosProveedores->fk_proveedor }}</td>
                <td>
                    {!! Form::open(['route' => ['productosProveedores.destroy', $productosProveedores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productosProveedores.show', [$productosProveedores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('productosProveedores.edit', [$productosProveedores->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
