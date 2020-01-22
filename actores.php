<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actores</title>
  </head>
  <body>
    <?php
    include "juegoDeTronos.php";
    //class actores extends thronesDB{
     $juego= new juegodetronos();

      $lista = $juego->listaActores();
      foreach ($lista as $value){
        echo "Nombre del actor: ".$value["name"]."<br>";
        echo "Nombre de la serie: ".$value["serie_name"]."<br>";
        echo "Episodios que aparece: ".$value["episodes"]."<br>";
    }
  ?>
  </body>
</html>
