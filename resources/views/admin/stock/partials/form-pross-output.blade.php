 <!---- Formulario Procesar salida --->
 <div class="slide">
    <div class="info info_process-output">
        <label for="code_input">
            <span class="input_process code_input">
                <i class='bx bx-scan icon_pro'><input type="number" name="" id="code_input"
                        placeholder="000001"></i>
            </span>
        </label>
        <label for="tex_input">
            <span class="input_process tex-input">
                <i class='bx bxs-notepad icon_pro'><input type="text" name="" id="tex_input"
                        placeholder="Ingrese el concepto de la salida"></i>

                <svg width="25" height="7" viewBox="0 0 25 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.4998 0.416672C10.804 0.416672 9.4165 1.80417 9.4165 3.50001C9.4165 5.19584 10.804 6.58334 12.4998 6.58334C14.1957 6.58334 15.5832 5.19584 15.5832 3.50001C15.5832 1.80417 14.1957 0.416672 12.4998 0.416672ZM21.7498 0.416672C20.054 0.416672 18.6665 1.80417 18.6665 3.50001C18.6665 5.19584 20.054 6.58334 21.7498 6.58334C23.4457 6.58334 24.8332 5.19584 24.8332 3.50001C24.8332 1.80417 23.4457 0.416672 21.7498 0.416672ZM3.24984 0.416672C1.554 0.416672 0.166504 1.80417 0.166504 3.50001C0.166504 5.19584 1.554 6.58334 3.24984 6.58334C4.94567 6.58334 6.33317 5.19584 6.33317 3.50001C6.33317 1.80417 4.94567 0.416672 3.24984 0.416672Z"
                        fill="black" />
                </svg>
                <!---- botom de input concepto de entrada ----->
                <div class="concept_btn">
                    <span class="concept" id="concept1">Ventas</span>
                    <span class="concept buton2" id="concept2">Consumo</span>
                    <span class="concept buton3" id="concept3">Devolución</span>
                </div>
            </span>
        </label>

        <label for="month_input">
            <span class="input_process month_input">
                <i class='bx bx-calendar-edit icon_pro'><input type="text" name="" id="month_input"
                        placeholder="DD/MM/YYYY" onfocus="(this.type='date')" name="" id=""></i>
                <p>De clic en el icono si desea cambiar la fecha</p>
            </span>
        </label>

        <div class="container_table">
            <table class="table-process">
                <thead>
                    <th>Código del producto</th>
                    <th>Descripción del producto</th>
                    <th>Cantidad</th>
                    <th>Costo C/U</th>
                    <th>Sub-total</th>

                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="" class="product_code"></td>
                        <td>dklf</td>
                        <td><input type="number" name="" id="" class="amount"></td>
                        <td></td>
                        <td>
                            <span id="sub-total">75</span>
                            <input type="hidden" name="" id="">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" id="" class="product_code"></td>
                        <td>dklf</td>
                        <td><input type="number" name="" id="" class="amount"></td>
                        <td></td>
                        <td>
                            <span id="sub-total">75</span>
                            <input type="hidden" name="" id="">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <span class="butom_more"><i class="fa-solid fa-plus"></i></span>
        <span class="butom-processoutput"><i class='bx bxs-archive-in'> </i>Procesar salida</span>

    </div>
</div>
<!-- close formulario de salida -->