
//Pasar las paginas en los wods
const entrenamientosPorPagina = 6;
let paginaActual = 1;

function mostrarPagina(direccion) {
    const wods = document.querySelectorAll('.wods');
    const totalWods = wods.length;

    // Oculta los wods actuales
    wods.forEach(wod => wod.classList.remove('wod-actual'));

    // Calcula la nueva página
    paginaActual += direccion;

    // Asegura que la página esté en el rango correcto
    if (paginaActual < 1) {
        paginaActual = Math.ceil(totalWods / entrenamientosPorPagina);
    } else if (paginaActual > Math.ceil(totalWods / entrenamientosPorPagina)) {
        paginaActual = 1;
    }

    // Muestra los wods de la nueva página
    const inicio = (paginaActual - 1) * entrenamientosPorPagina;
    const fin = inicio + entrenamientosPorPagina;
    for (let i = inicio; i < fin && i < totalWods; i++) {
        wods[i].classList.add('wod-actual');
    }

    // Actualiza el número de página en el elemento span
    document.getElementById('paginaActual').textContent = paginaActual;
}

// Muestra la primera página al cargar la página
mostrarPagina(0);

//realizar busqueda en las paginas de los wods
function realizarBusqueda() {
    // Obtener el valor del cuadro de búsqueda
    var searchTerm = document.getElementById("searchInput").value.toLowerCase();
    let btnSiguiente = document.getElementById("siguiente");
    let btnAtras = document.getElementById("atras");

    // Obtener todos los elementos originales
    var elementos = document.getElementsByClassName("wods");

    // Iterar sobre los elementos y ocultar/mostrar según la búsqueda
    for (var i = 0; i < elementos.length; i++) {
        var nombreElemento = elementos[i].getAttribute("data-nombre").toLowerCase();
        if (nombreElemento.includes(searchTerm)) {
            elementos[i].style.display = "block"; // Mostrar el elemento
        } else {
            elementos[i].style.display = "none"; // Ocultar el elemento
            btnAtras.disabled = true;
            btnSiguiente.disabled = true;

        }
    }

    //

}