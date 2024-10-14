function cargarContenido(url){
    var contenido = document.getElementById('contenido');
    fetch(url)
        .then(response => response.text())
        .then(html => {
            contenido.innerHTML = html;
        })
        .catch(error => console.log('Error al cargar el contenido:', error));
}

function cargarHabitaciones(url){
    var contenido = document.getElementById('contenido');
    fetch(url)
        .then(response => response.text())
        .then(html => {
            contenido.innerHTML = html;
        })
        .catch(error => console.log('Error al cargar el contenido:', error));
}