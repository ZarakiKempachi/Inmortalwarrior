document.addEventListener('DOMContentLoaded', function() {
    let inputBusqueda = document.getElementById('inputBusqueda');

    // Verificar si el elemento inputBusqueda existe
    if (inputBusqueda) {
        inputBusqueda.addEventListener('input', function() {
            console.log("Buscando...");
            let busqueda = inputBusqueda.value.toLowerCase().trim();
            let cuadrosWod = document.querySelectorAll('.cuadro-wod');

            cuadrosWod.forEach(function(cuadroWod) {
                let nombreWod = cuadroWod.querySelector('.titulo-wods').textContent.toLowerCase();

                if (nombreWod.includes(busqueda)) {
                    cuadroWod.style.display = 'block';
                } else {
                    cuadroWod.style.display = 'none';
                }
            });
        });
    }
});

