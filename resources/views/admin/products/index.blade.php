@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')

    <section class="navber">

        @include('partials.sidebar')


        <!-------- Productos - Marcas - Categorias ----------->
        <div class="menu_superior">

            <!----- Tabla y Formulario de Registro de producto ---->
            <div class="slide active">
                <div class="info info_process-buy">
                    <!---- Boton para mostrar el modal de formulario de registro de producto ---->
                    <label for="btn_ventas">
                        <span class="butom_more"></span>
                        <h1 class="clic">Crear Producto</h1>
                    </label>
                    <!---- Cierre Boton para mostrar el modal de formulario de registro de producto ---->

                    <!---- Tabla de productos ---->
                    <div class="container_table">

                        <table class="table-process">
                            <thead>
                                <th>N°</th>
                                <th>Código de barra</th>
                                <th>Descripción del producto</th>
                                <th>Marca</th>
                                <th>Categoria</th>
                                <th>ACCIONES</th>

                            </thead>
                            <tbody id="tbodyProducts">
                                {{-- Llenado con js --}}
                            </tbody>
                        </table>

                        <!-------botones Next y Previus Paginación-------->
                        <div class="container_bot" id="paginationProducts">
                        </div>
                    </div>
                    <!---- Cierre de Tabla de productos ---->



                    <!------ Formulario de crear producto ---------->
                    @include('admin.products.partials.formProduct')
                    <!------ Cierre de formulario de crear producto ---------->



                    <!----- Alerta de proceso aprobado ----->
                    @include('partials.notification')
                    <!----- Cierre Alerta de proceso aprobado ----->

                </div>
            </div>
            <!----- Cierre Tabla y Formulario de Registro de producto ---->

            <!----- Tabla de Registrar Categoria ---->
            <div class="slide ">
            
                <div class="info info_process-buy">
                    <!---- Boton para mostrar el modal de formulario de registro de producto ---->
                    <label for="btn_categorie">
                        <span class="butom_more" id=""></span>
                        <h1 class="clic">Crear Categoria</h1>
                    </label>
                    <!---- Cierre Boton para mostrar el modal de formulario de registro de producto ---->

                    <!--- Modal de cargar Categoria ---->
                    <div class="carga-mark2">
                        <h2 class="mark">AGREGAR NUEVA CATEGORIA</h2>
                        <input class="input-mark" type="text" placeholder="Ingrese nombre de la categoria"
                            name="name" id="addCategorie1">
                        {{-- Mensaje Temporal o interrucción --}}
                        <label for="C1">
                            <span class="btn-mark">
                                Presione Enter para guardar
                            </span>
                        </label>
                        {{-- Cierre Mensaje Temporal o interrucción --}}
                    </div>
                    <!--- Cierre Modal de cargar Categoria ---->


                    <!---- Tabla de productos ---->
                    <div class="container_table">

                        <table class="table-process">
                            <thead>
                                <th>N°</th>
                                <th>Categoria</th>
                                <th>ACCIONES</th>

                            </thead>
                            <tbody id="tbodyCategories">
                                {{-- Llenado con js --}}
                            </tbody>
                        </table>

                        <!-------botones Next y Previus Paginación-------->
                        <div class="container_bot" id="paginationCategories">
                        </div>
                    </div>
                    <!---- Cierre de Tabla de productos ---->



                    <!------ Formulario de crear producto ---------->
                    <input type="checkbox" id="C1">
                    <input type="checkbox" id="btn_successful">
                    <input type="checkbox" id="btn_successful2">
                    <input type="checkbox" id="btn_ventas">
                    {{-- <input type="checkbox" id="btn_preload"> --}}

                    <div class="container_process-sale ">

                        <h1>CREAR PRODUCTO</h1>
                        <!------- Btn de cerrar caja ------->
                        <label for="btn_ventas">
                            <h1 class="cerrar_caja" title="Cerrar"></h1>
                        </label>
                        <!------- Cierre Btn de cerrar caja ------->

                        <form action="#products" method="post" id="formProducts">
                            <div class="caja_1">
                                <span class="inpt-caja">
                                    <i class="fa-solid fa-barcode icon_caja"></i>
                                    <input class="in-code" type="text" placeholder="Ingrese código del producto"
                                        name="codebar" id="codebar" required>
                                </span>

                                <span class="inpt-caja">
                                    <p>Descripción</p>
                                    <input class="in-caja" type="text" placeholder="Ingrese descripción" id="description"
                                        name="description" required>
                                </span>


                                <span class="inpt-caja">
                                    <p>Marcas</p>

                                    <span class="tex">
                                        <select onfocus="this.size=4;" onblur="this.size=0;"
                                            onchange="this.size=1; this.blur()" id="selectMarks" name="mark" required>
                                        </select>
                                    </span>
                                </span>

                                <span class="inpt-caja">
                                    <p>Categoria</p>

                                    <span class="tex tex2">

                                        <select onfocus="this.size=4;" onblur="this.size=0;"
                                            onchange="this.size=1; this.blur()" id="selectCategories" name="categorie"
                                            required>
                                        </select>
                                    </span>
                                </span>

                            </div>

                            <!--- Modal de cargar marca ---->
                            <div class="carga-mark">
                                <h2 class="mark">AGREGAR NUEVA MARCA</h2>
                                <input class="input-mark" type="text" placeholder="Ingrese nombre" name="name"
                                    id="addMark">

                                {{-- Mensaje Temporal o interrucción --}}
                                <label for="C1">
                                    <span class="btn-mark">
                                        Presione Enter para guardar
                                    </span>
                                </label>
                                {{-- Cierre Mensaje Temporal o interrucción --}}
                            </div>
                            <!--- Cierre Modal de cargar marca ---->

                            <!--- Modal de cargar Categoria ---->
                            <div class="  carga-mark2">
                                <h2 class="mark">AGREGAR NUEVA CATEGORIA</h2>
                                <input class="input-mark" type="text" placeholder="Ingrese nombre de la categoria"
                                    name="name" id="addCategorie">
                                {{-- Mensaje Temporal o interrucción --}}
                                <label for="C1">
                                    <span class="btn-mark">
                                        Presione Enter para guardar
                                    </span>
                                </label>
                                {{-- Cierre Mensaje Temporal o interrucción --}}
                            </div>
                            <!--- Cierre Modal de cargar Categoria ---->




                            <!--- Cierre Modal de cargar Categoria ---->

                            <!---- Botenes para abrir el  modal de carga de marca -------->
                            <label for="btn_successful">
                                <span class="butom_more caja_more-1"></span>
                            </label>
                            <!---- Cierre Botenes para abrir el  modal de carga de marca -------->

                            <!---- Botenes para abrir el  modal de carga de Categoria -------->
                            <label for="btn_successful2">
                                <span class="butom_more caja_more-2"></span>
                            </label>
                            <!---- Cierre Botenes para abrir el  modal de carga de Categoria -------->


                            <!------- botones del formulario ------->
                            <div class="butom_caja">
                                <label for="btn_ventas">
                                    <span class="buton_venta btn-anular">
                                        <i class='fa fa-trash icon_ventas'></i>
                                        Limpiar y Cerrar
                                    </span>
                                </label>

                                <label>
                                    <span class="buton_venta btn-pago" id="buttomSubmitProduct">
                                        <i class='fa fa-box icon_ventas'></i>
                                        Crear Producto
                                    </span>
                                </label>
                            </div>
                            <!------- Cierre botones del formulario ------->

                        </form>
                    </div>
                    <!------ Cierre de formulario de crear producto ---------->



                    <!----- Alerta de proceso aprobado ----->
                    <div class="approved-mark" id="temporaryMessage">
                    </div>
                    <!----- Cierre Alerta de proceso aprobado ----->

                </div>
              
            </div>
            <!----- Cierre de Formulario de Registrar Categorias ---->

            <!----- Formulario de Registrar Marcas ---->
            <div class="slide ">
                {{-- <input type="checkbox" id="C1"> --}}

                <div class="container_table" style="left: 450px; top:-75px;">

                    <label for="">Crear marca</label>
                    <input class="input-mark" type="text" placeholder="Ingrese nombre de la categoria" name="name"
                        id="addMark1">


                    <table class="table-process">
                        <thead>
                            <th>N°</th>
                            <th>Marca</th>
                            <th>ACCIONES</th>
                        </thead>
                        <tbody id="bodyTableMarks">
                            {{-- Se llena desde JS --}}
                        </tbody>
                    </table>

                </div>
            </div>
            <!----- Cierre de Formulario de Registrar Marcas ---->




            <!----- btn del menu superior de navegacion ------>
            <div class="navigation">
                <div class="btn active"><a>Lista</a></div>
                <div class="btn"><a>Categorias</a></div>
                <div class="btn"><a>Marcas</a></div>
            </div>


            <label for="config">

                <div class="config">
                    <input type="checkbox" id="config">
                    <i class="fa-sharp fa-solid fa-gear"></i>
                    Configurar
                </div>
            </label>
            <!----- Cierre btn del menu superior de navegacion ------>

        </div>

        <!-- Preload -->
        {{-- <div class=" carga-successful">

        <h1 class="hearder-sucessful">
            <p>Registrando Producto </p>
        </h1>

        <div class="loader">
            <div class="circle one"></div>
            <div class="circle two"></div>
            <div class="circle three"></div>
        </div>

        <div class="successful">
            <span class="cargas carga1">✓</span>
            <span class="cargas carga2">✓</span>

            <h2>El Producto se registro con exito</h2>

            {{-- <label for="btn_successful">
                <span class="buton-sucessful btn-anular">
                    <i class='bx bxs-x-square icon-sucessful'></i>
                    Finalizar sin factura
                </span>
            </label>

            <label for="C1">
                <span class="buton-sucessful btn-generar ">
                    <i class='bx bx-file  icon-sucessful'></i>
                    Generar Factura
                </span>
            </label> --}}
        {{-- </div>
    </div> --}}


        <!-------- Cierre Productos - Marcas - Categorias ----------->

    </section>

@endsection
