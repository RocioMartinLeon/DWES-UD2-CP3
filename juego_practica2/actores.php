<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Actores</title>
</head>
<body>
  <h2>Lista  actores :</h2>

  <?php
  include "thronesDB.php";
  $juego= new thronesDB();

  $lista = $juego->listaActores();
  foreach ($lista as $value){
    echo "Nombre del actor: ".$value["name"]."</br>";
    echo "Nombre de la serie: ".$value["serie_name"]."</br>";
    echo "Episodios que aparece: ".$value["episodes"]."</br>";
  }
  ?>
</body>
</html>
