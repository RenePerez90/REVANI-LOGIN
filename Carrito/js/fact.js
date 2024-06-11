const ConsumidorFinal = document.querySelector("#consumidor-final");
const ContenedorNIT = document.querySelector("#contenedor-nit");
const botonConfirmarPedido = document.querySelector("#confirm-order");
const CarritoComprado = document.querySelector("#carrito-comprado");

function abrirModal(){
    new bootstrap.Modal('#modal-static').show();
}
  
ConsumidorFinal.addEventListener("click", consumidor);
function consumidor() {
    if (ConsumidorFinal.checked==true){
        ContenedorNIT.value ="CF"
        ContenedorNIT.disabled = true
    } else{
        ContenedorNIT.value = ''
        ContenedorNIT.disabled = false
    }
}

botonConfirmarPedido.addEventListener("click", confirmarCompra);

function confirmarCompra() {
    Swal.fire({
        title: 'Gracias por su Compra.',
        icon: 'question',
        html: `El pedido esta siendo atentido...`,
        showCancelButton: true,
        focusConfirm: false,
        confirmButtonText: 'Sí',
        cancelButtonText: 'No'
    });


    productosEnCarrito.length = 0;
    localStorage.setItem("productos-en-carrito", JSON.stringify(productosEnCarrito));
    
    contenedorCarritoVacio.classList.add("disabled");
    contenedorCarritoProductos.classList.add("disabled");
    contenedorCarritoAcciones.classList.add("disabled");
    CarritoComprado.classList.remove("disabled");

}