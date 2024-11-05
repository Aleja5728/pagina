var formulario = document.querySelector(".formulario");
var agregar_usuario = document.querySelector(".agregar_usuario");
var volver_modal_1 = document.querySelector(".volver_modal_1");

agregar_usuario.addEventListener("click", function(e) {
    e.defaultPrevented;
    document.querySelector(".formulario").style.display = "block";
});

volver_modal_1.addEventListener("click", function(e) {
    e.defaultPrevented;
    document.querySelector(".formulario").style.display = "none";
});