<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Actores por temporada</title>
</head>
<body>
  <h2>Lista completa de actores por temporada:</h2>

  <?php
  include "thronesDB.php";
  $juego=new thronesDB();

  $lista = $juego->actoresPorTemporada();
  foreach ($lista as $value){
    echo "Nombre del actor: ".$value["name"]."<br>";
    echo "Nombre de la serie: ".$value["serie_name"]."<br>";
    echo "Temporada que aparece: ".$value["season"]."<br>";
  }
  ?>
</body>
</html>
