$(document).ready(function () {
  $("#getDog").click(function () {
    $.ajax({
      url: "https://dog.ceo/api/breeds/image/random", // Endpoint
      method: "GET",
      //   headers: {
      //     "Content-Type": "application/json",
      //     "X-JokesOne-Api-Secret": "YOUR_API_KEY_HERE",
      //   },
      success: function (response) {
        console.log(response);
        var imgLocation = response.message;
        var img = "<img src='" + imgLocation + "'>";
        $("#dogContainer").html(img);
        // var dog = response.contents.jokes[0].joke.text;
        // $("#jokeContainer").text(dog);
      },
      error: function () {
        $("#dogContainer").text("Error al cargar el chiste.");
      },
    });
  });
});
