   // Tarjeta de información
   var puntos = document.querySelector(".puntos");
   var boton_informe = document.querySelector(".boton_informe");
   var tarjeta_informacion = document.querySelector(".tarjeta_informacion");
   puntos.addEventListener("click", (e) => {
       e.preventDefault;
       boton_informe.style.display = "block";
   })
   boton_informe.addEventListener("click", (e) => {
       e.preventDefault;
       alert("boton");
   })
   tarjeta_informacion.addEventListener("mouseleave", (e) => {
       e.preventDefault;
       boton_informe.style.display = "none";
   });