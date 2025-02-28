document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault(); 

    const formData = new FormData(event.target); // captura de datos
    const valores = {};

    // Convert FormData to a plain object
    formData.forEach((valor, key) => {
        valores[key] = valor;
    });

    console.log(valores); // { nombre: '...', apellido: '...', fechanac: '...', ... }
    popularTabla(valores);

    // You can now use `data` to save to local memory, populate the table, etc.
});

function popularTabla(datos) {
    let fila = '<tr>';
    //calculo de edad
    const hoy = new Date();
    const nac = new Date(datos.fechanac);
    const diferencia = hoy-nac;

    const dias = Math.floor(diferencia/86400000);
    const edad = Math.floor(dias/360);

    console.log(hoy, nac);
    console.log(edad);
    fila += `
    <td>${datos.nombre} ${datos.apellido}</td>
    <td>${datos.fechanac}</td>
    <td>${datos.pais}</td>
    <td>${datos.estudios}</td>
    </tr>`;
    

    const tabla = document.querySelector('.js-practica2-tabla');
    tabla.innerHTML += fila;
};
