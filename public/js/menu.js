
// Menú desplegable
var menu = document.querySelector(".menu");
menu.addEventListener("click", (e) => {
    // Evento para llamar a los items del menú
    e.preventDefault;
    menu_items.style.display = "block";
});
var menu_items = document.querySelector(".menu_items");
menu_items.addEventListener("mouseleave", (e) => {
    // Evento para ocultar los items del menú
    e.preventDefault;
    menu_items.style.display = "none";
});


// Modal de información
var modal_informacion = document.querySelector(".modal_informacion");
var cerrar_modal = document.querySelector(".cerrar_modal");
var informacion_personal = document.querySelector(".informacion_personal");
informacion_personal.addEventListener("click", (e) => {
    e.preventDefault;
    modal_informacion.style.display = "block";
});
cerrar_modal.addEventListener("click", (e) => {
    e.preventDefault;
    modal_informacion.style.display = "none";
});

// Redirección a página de configuración
var configuracion = document.querySelector(".configuracion");
configuracion.addEventListener("click", (e) => {
    e.preventDefault;
    location.href ="pagina-configuracion";
});

// Editar informacióN
var boton_editar = document.querySelector(".boton_editar");
boton_editar.addEventListener("click", (e) => {
    e.preventDefault;
    document.querySelector(".nombre").disabled = false;
    document.querySelector(".nombre").style.borderColor = "black";
    document.querySelector(".apellido").disabled = false;
    document.querySelector(".apellido").style.borderColor = "black";
    document.querySelector(".numero_documento").disabled = false;
    document.querySelector(".numero_documento").style.borderColor = "black";
    document.querySelector(".telefono").disabled = false;
    document.querySelector(".telefono").style.borderColor = "black";
    document.querySelector(".correo").disabled = false;
    document.querySelector(".correo").style.borderColor = "black";
});