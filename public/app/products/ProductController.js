
// Registrar producto en la DB
const storeProduct = async (product) => {
    await fetch(`${URL_BASE}/products`, {
        method: "POST", // or 'PUT'
        body: JSON.stringify(product), // data can be `string` or {object}!
        headers: {
          "Content-Type": "application/json",
        },
    })
    .then((res) => res.json())
    .catch((error) => console.error("Error:", error))
    .then((response) => {
        console.log("Success:", response)
    });
}

const deleteProduct = async (idProduct) => {
    await fetch(`${URL_BASE}/products/${idProduct}`, {
        method: "DELETE", // or 'PUT'
        body: JSON.stringify(idProduct), // data can be `string` or {object}!
        headers: {
          "Content-Type": "application/json",
        },
    })
    .then((res) => res.json())
    .catch((error) => console.error("Error:", error))
    .then((response) => {
        console.log("Success:", response)
    });
}

const getProduct = (barcode) => {

    return new Promise(  (resolve, reject)=>{
         
        setTimeout(()=>{
            resolve({
                value: barcode,
                result:  fetch(`${URL_BASE}/getProduct/${barcode}`, {
                    method: "GET", // or 'PUT'
                    // body: JSON.stringify(idProduct), // data can be `string` or {object}!
                    headers: {
                      "Content-Type": "application/json",
                    },
                })
                .then(response => response.json())
                .catch(err => log(err))
                .then(data => data)
        
                })
            });
        }, 1500);

    // .then((res) => res.json())
    // .catch((error) => console.error("Error:", error))
    // .then((response) =>  response);
}

const showProduct = async (idProduct) => {
    await fetch(`${URL_BASE}/products/${idProduct}`, {
        method: "GET", // or 'PUT'
        // body: JSON.stringify(idProduct), // data can be `string` or {object}!
        headers: {
          "Content-Type": "application/json",
        },
    })
    .then((res) => res.json())
    .catch((error) => console.error("Error:", error))
    .then((response) =>  response);
}