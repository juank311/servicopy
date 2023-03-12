

<script>
function formatearMoneda(valor) {
    var formatter = new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0,
        maximumFractionDigits: 0
    });
    return formatter.format(valor);
}

var valores = document.getElementsByClassName("valor");
for (var i = 0; i < valores.length; i++) {
    var valor = parseFloat(valores[i].textContent.replace(/[\$,.]/g, ''));
    valores[i].textContent = formatearMoneda(valor);
}
<script/>

/* // Obtener el botón y el aside
const btnToggleAside = document.getElementById('btn-toggle-aside');
const myAside = document.getElementById('myAside');

// Agregar evento click al botón
btnToggleAside.addEventListener('click', function () {
    // Toggle de la clase d-none para mostrar/ocultar el aside
    myAside.classList.toggle('d-none');
}); */

