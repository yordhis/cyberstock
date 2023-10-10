
let btnProcesarEntrada = d.getElementById("btnProcesarEntrada"),
inputsEntrys = d.querySelectorAll('.inputEntry'),
inputBarcode = d.querySelector('#barcode_product'),
inputQuantity = d.querySelector('#quantity'),
inputUnitCost = d.querySelector('#unit_cost'),
inputSubtotal = d.querySelector('#subtotal'),
tbodyEntryProduct = d.querySelector('#tbodyEntryProduct'),
products = [],
product = null;

const addRow = (products) => {
      products.forEach((product, key) =>{
            tbodyEntryProduct.innerHTML += `
            <tr>
                <td>
                    ${product.barcode}
                </td>
                <td>
                    ${product.description}
                </td>
                <td>
                    ${product.quantity}
                </td>
                <td>
                    ${product.unit_cost} 
                </td>
                <td>
                    ${product.subtotal} 
                </td>
                <td>
                    <bottom id="${key}">
                        <i class="fa fa-trash"></i> 
                    </bottom>
                </td>
            </tr>
            `;
     })    
};

const handleInputBarcode = async (e) => {
    // e.preventDefault();
    log(e.target.value)
    if (e.target.value.length > 3) {
        result = await getProduct(e.target.value)
     
        product = await result.result;
  
        inputsEntrys.forEach(input => {
            if(input.id == "description") input.value = product.data.description;
        });
        
     
        // return inputBarcode.addEventListener('keypress', handleEnterKey);
    }
};

const handleEnterKeyTwo = (e)=>{
    log(e.target.value)
    let entryDataProduct = null;
    if (e.key == "Enter") {
        entryDataProduct = inputsEntrys.forEach(input => {
            if(input.id == "barcode") return input.value;
            if(input.id == "description") return input.value;
            if(input.id == "quantity") return input.value;
            if(input.id == "unit_cost") return input.value;
            if(input.id == "subtotal") return input.value;
        });
        log(entryDataProduct)
        // products.push(entryDataProduct);
        // addRow(products)
    }
};

const handleSubtotal = (e) => {
    let quantity = parseFloat(e.target.value),
    unitCost = parseFloat(inputUnitCost.value);
    if (quantity && unitCost) {
        inputSubtotal.value = quantity * unitCost
    }else{
        log("Los datos ingresados no son números!")
    }
}


inputBarcode.addEventListener('keyup', handleInputBarcode);

tbodyEntryProduct.addEventListener('keyup', handleEnterKeyTwo)

inputQuantity.addEventListener('change', handleSubtotal)





