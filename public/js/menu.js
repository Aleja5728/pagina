
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

