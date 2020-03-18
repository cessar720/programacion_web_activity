@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Productos Proveedores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productosProveedores, ['route' => ['productosProveedores.update', $productosProveedores->id], 'method' => 'patch']) !!}

                        @include('productos_proveedores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection