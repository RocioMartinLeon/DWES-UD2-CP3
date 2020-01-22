<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actores por temporada</title>
  </head>
  <body>
    <form method="get">
      Número de temporada:<br>
      <imput type="text" name="temporada"><br>
        <imput type="submit" value="Enviar">
        </form>
        <h2>Lista completa de actores por temporada:</h3>
          <br>
    <?php
    include "juegoDeTronos.php";

    $juego=new juegodetronos();

    if(isset($_GET["temporada"])){
      $lista=$juego->actoresPorTemporada($_GET["temporada"]);
      foreach ($lista as value) {
        echo "Nombre del actor: ".$value["name"]."<br>";
        echo "Nombre personaje: ".$value["serie_name"]."<br>";
      }
    }

    ?>
  </body>
</html>
