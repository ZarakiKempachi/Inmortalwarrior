document.addEventListener('DOMContentLoaded', function() {
    let inputBusqueda = document.getElementById('inputBusquedaBox');

    // Verificar si el elemento inputBusqueda existe
    if (inputBusqueda) {
        inputBusqueda.addEventListener('input', function() {
            console.log("Buscando...");
            let busqueda = inputBusqueda.value.toLowerCase().trim();
            let cuadrosBox = document.querySelectorAll('.cuadrosBox');

            cuadrosBox.forEach(function(cuadroBox) {
                let nombreBox = cuadroBox.querySelector('.tituloBox').textContent.toLowerCase();

                if (nombreBox.includes(busqueda)) {
                    cuadroBox.style.display = 'block';
                } else {
                    cuadroBox.style.display = 'none';
                }
            });
        });
    }
});
