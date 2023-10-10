<!-- Formulario de Procesar Entrada  ----->
<div class="slide">
    <div class=" info info_input-processor info_process-output">

        <label for="code-input">
            <span class="input_process code_input">
                <i class='fa fa-barcode icon_pro'>
                    <input type="number" name="code_entry" id="code-input" class="inputEntry" placeholder="Ingrese código">
                </i>
            </span>
        </label>

        <label for="id-input">
            <span class="input_process id_input">
                <i class='fa fa-user icon_pro'>
                    <input type="text" name="provider_code" id="id-input" class="inputEntry"
                        placeholder="Ingrese código del proveedor"></i>
            </span>
        </label>

        <label for="tex-input">
            <span class="input_process tex-input">
                <div class="group-inline">
                    <i class="fa-regular fa-clipboard icon_pro_new"></i>
                    <select name="entry_type" id="entry_type" class="form-control inputEntry">
                        <option value="0">Seleccione Tipo de entrada</option>
                    </select>
                </div>
            </span>
        </label>

        <label for="month-input">
            <span class="input_process month_input">

                <i class="fa-regular fa-calendar-days icon_pro">
                    <input type="text" name="date_entry" id="month-input" class="inputEntry" placeholder="DD/MM/YYYY"
                        onfocus="(this.type='date')" name="" id="">
                </i>
                <p>De clic en el icono si desea cambiar la fecha</p>
            </span>
        </label>

        <div class="container_table">
            <table class="table-process">
                <thead>
                    <th>Codigo de Barra</th>
                    <th>Descripción del producto</th>
                    <th>Cantidad</th>
                    <th>Costo C/U</th>
                    <th>Sub-total</th>
                </thead>
                <tbody id="tbodyEntryProduct">

                    <tr>
                        <td>
                            <input type="text" name="barcode_product" id="barcode_product"
                                class="product_code inputEntry">
                        </td>
                        <td>
                            <input type="text" name="description" id="description" class="product_code inputEntry"
                                disabled>
                        </td>
                        <td>
                            <input type="number" name="quantity" id="quantity" class="amount inputEntry" value="0">
                        </td>
                        <td>
                            <input type="number" name="unit_cost" id="unit_cost" class="amount inputEntry" value="0">
                        </td>
                        <td>
                            <input type="number" name="subtotal" id="subtotal" class="amount inputEntry" value="0">
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!------------tabla sub-total------------------->
        <table class="table-sub_total">
            <tr>
                <th>Descuento %</th>
                <td>
                    <input type="number" name="discount" id="discount" class="inputEntry" placeholder="Ingrese % de descuento">
                </td>
            </tr>
            <tr>
                <th>Sub-Total</th>
                <td id="subtotalAll">0</td>
            </tr>
            <tr>
                <th>IVA %</th>
                <td>
                    <input type="number" name="discount" id="discount" class="inputEntry" placeholder="Ingrese % de IVA" value="16">
                </td>
            </tr>
            <tr>
                <th>Sub-Total con IVA</th>
                <td id="subTotalConIva">0</td>
            </tr>
            <tr>
                <th>Total</th>
                <td id="total" >0</td>
            </tr>
        </table>

        <button class="butom-processoutput" id="btnProcesarEntrada">
            <i class="fa-solid fa-truck-ramp-box"></i>
            Procesar Entrada
        </button>


    </div>
</div>
<!-- close formulario de Entrada -->
