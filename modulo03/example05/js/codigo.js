document.getElementById("especial").addEventListener("click", function (e) {
  alert("¡Hola Mundo!");
});

document.getElementById("saludo").addEventListener("click", function (e) {
  //   alert("¡Hola Mundo!");
  let div = document.getElementById("mensaje");
  div.style.display = "block";
});

document.getElementById("close").addEventListener("click", function (e) {
  //   alert("¡Hola Mundo!");
  let div = document.getElementById("mensaje");
  div.style.display = "none";
});
