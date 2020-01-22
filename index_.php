<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Índice</title>
  </head>
  <body>

    <h1>Juego de Tronos</h1></br>

   <a href ="actores.php"><button> Actores</button></a></br></br>
   <a href="actoresTemp.php"><button>Actores por episodios</button></a></br></br>
<h2>Resumen de la serie:</h2><br>;
<?php
include "JuegoDeTronos.php";
$juego=new juegodetronos();

$resumen=$juego->resumenSerie();
foreach ($resumen as $value){
  echo $value["plot"];
}
  ?>

  </body>
</html>
