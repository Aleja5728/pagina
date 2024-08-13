
var modal_1 = document.querySelector(".boton_modal1");
var volver_modal_1 =  document.querySelector(".volver_modal_1");

modal_1.addEventListener("click", function(e){
    e.defaultPrevented;
    document.querySelector(".modal").style.display = "block";
});

volver_modal_1.addEventListener("click", function(e){
    e.defaultPrevented;
    document.querySelector(".modal").style.display = "none";
});
