


<li class="{{ Request::is('empresas*') ? 'active' : '' }}">
    <a href="{{ route('empresas.index') }}"><i class="fa fa-edit"></i><span>Empresas</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>


<li class="{{ Request::is('proveedores*') ? 'active' : '' }}">
    <a href="{{ route('proveedores.index') }}"><i class="fa fa-edit"></i><span>Proveedores</span></a>
</li>



<li class="{{ Request::is('empresasProductos*') ? 'active' : '' }}">
    <a href="{{ route('empresasProductos.index') }}"><i class="fa fa-edit"></i><span>Empresas Productos</span></a>
</li>

<li class="{{ Request::is('productosProveedores*') ? 'active' : '' }}">
    <a href="{{ route('productosProveedores.index') }}"><i class="fa fa-edit"></i><span>Productos Proveedores</span></a>
</li>

