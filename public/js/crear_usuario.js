var modal_1 = document.querySelector(".agregar_usuario");
var volver_modal_1 = document.querySelector(".volver_modal_1");

modal_1.addEventListener("click", function(e) {
    e.defaultPrevented;
    document.querySelector(".formulario").style.display = "block";
});

volver_modal_1.addEventListener("click", function(e) {
    e.defaultPrevented;
    document.querySelector(".formulario").style.display = "none";
});