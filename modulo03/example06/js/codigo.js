$(document).ready(function () {
  // Código jQuery va aquí
  $("h1")
    .css("color", "red")
    .css("font-family", "Arial, Helvetica")
    .css("font-size", "24pt")
    .css("font-weight", "100")
    .css("background-color", "#ffffaa")
    .text("Hola Mundo!");

  $("#especial").css("color", "blue").text("Especial").css("cursor", "pointer");

  $("#especial").click(function () {
    let texto = $("#especial").text();
    texto = texto == "Viva la Inter!!" ? "Sorprise!!" : "Viva la Inter!!";
    // if (texto == "Viva la Inter!!") {
    //   texto = "Sorpresa!!";
    // } else {
    //   texto = "Viva la Inter!!";
    // }
    $("#especial").text(texto);
  });

  $("button").click(function () {
    for (n = 1; n <= 100; n++) {
      $("p").append("<strong>Hola #" + n + "</strong>");
    }
  });
});
