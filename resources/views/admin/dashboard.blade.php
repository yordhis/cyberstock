@extends('layouts.app')

@section('title', 'Panel Principal')

@section('content')

<section class="navber">
    <!--Menu Izquierdo-->
    @include('partials.sidebar')


    <div class="menu_superior">

        <!---------stock------------->
        @include('admin.stock.partials.table-stock')
        <!-- close stock -->
        
        <!--- tabla de salida ---------------->
        @include('admin.stock.partials.table-output')
        <!-- close salida -->
        
        <!----Tabla entradas -------->
        @include('admin.stock.partials.table-input')
        <!-- close entrada -->
        
        <!---- Formulario Procesar Salida --->
        @include('admin.stock.partials.form-pross-output')
        <!-- close formulario de Salida -->
        
        <!-- Formulario de Procesar Entrada  ----->
        @include('admin.stock.partials.form-pross-input')
        
        <!-- close formulario de Entrada -->

        <!-- Navegacion Superior-->
        <div class="navigation">
            <div class="btn"><a>General</a></div>
            <div class="btn"><a>Salida</a></div>
            <div class="btn"><a>Entrada</a></div>
            <div class="btn"><a>Procesar Salida</a></div>
            <div class="btn active"><a>Procesar Entrada</a></div>
        </div>


        <label for="config">
            <div class="config">
                <input type="checkbox" id="config" />
                <i class="fa-sharp fa-solid fa-gear"></i>
                Configurar
            </div>
        </label>
       
    </div>

</section>

@endsection