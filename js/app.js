document.addEventListener("DOMContentLoaded", function () {
    const dropdownButtons = document.querySelectorAll(".dropdown-btn"); //select de botones

    
    dropdownButtons.forEach((button) => {
        //eventos para click
        button.addEventListener("click", function (event) {
            event.preventDefault(); //borrado de funcion original

            const dropdownMenu = this.nextElementSibling; //select de ul

            //cierra los que queden activos
            document.querySelectorAll(".dropdown-menu").forEach((menu) => {
                if (menu !== dropdownMenu) {
                    menu.classList.remove("active");
                }
            });

            //activar el presionado
            dropdownMenu.classList.toggle("active");
        });
    });

    
    document.addEventListener("click", function (event) {
        //al activar uno, cerrar los demas
        if (!event.target.matches(".dropdown-btn")) {
            document.querySelectorAll(".dropdown-menu").forEach((menu) => {
                menu.classList.remove("active");
            });
        }
    });
});