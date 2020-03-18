@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Empresas Productos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($empresasProductos, ['route' => ['empresasProductos.update', $empresasProductos->id], 'method' => 'patch']) !!}

                        @include('empresas_productos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection