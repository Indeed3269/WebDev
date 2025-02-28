const paginas = [
    {
        site: "index.html",
        icono: `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>`,
        texto: "Inicio"
    },
    {
        site: "pagina2.html",
        icono: `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M120-120v-560h160v-160h400v320h160v400H520v-160h-80v160H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z"/></svg>`,
        texto: "Nosotros"
    },
    {
        site: "formulario.html",
        icono: `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm80-80h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm200-190q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/></svg>`,
        texto: "Formulario"
    },
    {
        site: "empresa.html",
        icono: `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M160-720v-80h640v80H160Zm0 560v-240h-40v-80l40-200h640l40 200v80h-40v240h-80v-240H560v240H160Zm80-80h240v-160H240v160Zm-38-240h556-556Zm0 0h556l-24-120H226l-24 120Z"/></svg>`,
        texto: "Empresa"
    },
    {
        site: "mascota.html",
        icono: `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M180-475q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm180-160q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm240 0q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29Zm180 160q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM266-75q-45 0-75.5-34.5T160-191q0-52 35.5-91t70.5-77q29-31 50-67.5t50-68.5q22-26 51-43t63-17q34 0 63 16t51 42q28 32 49.5 69t50.5 69q35 38 70.5 77t35.5 91q0 47-30.5 81.5T694-75q-54 0-107-9t-107-9q-54 0-107 9t-107 9Z"/></svg>`,
        texto: "Mascota"
    }
];

function genBarraNav(sitios) {
    let estructura = '';
    sitios.forEach(sitio => {
        estructura += `
            <a href="${sitio.site}">
                ${sitio.icono}
                <p>${sitio.texto}</p>
            </a>

        `
    });
    return estructura;
}


function llenadoDeInner() {
    const navBarHTML = genBarraNav(paginas);

    const barra = document.querySelector(".navegacion");
    barra.innerHTML = navBarHTML;
}

// Call the function to inject the navigation bar
llenadoDeInner();
