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
                     name="barcode" id="barcode" required>
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