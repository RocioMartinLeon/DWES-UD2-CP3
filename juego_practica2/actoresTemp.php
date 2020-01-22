<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Actores por episodios</title>
</head>
<body>
  <h2>Lista completa de actores por episodios:</h2>
  <form method="get">
    Número de episodio:<br>
    <input type="text" name="episode"><br>
    <input type="submit" value="Enviar">
  </form>
  <br>
  <?php
  include "thronesDB.php";
  $juego=new thronesDB();

  //filtrado
  if(isset($_GET["episode"])){
    $lista=$juego->actoresFiltro($_GET["episode"]);
    //Agregamos esta linea para evitar que de error, cuando un valor en la lista devuelva vacio.
    if(is_array($lista)){
      foreach ($lista as $value) {
        echo "Nombre del actor: ".$value["name"]."<br>";
        echo "Nombre personaje: ".$value["serie_name"]."<br>";
        echo "Episodio: ".$value["episode"]."<br>";
      }
    }
  }
  ?>
</body>
</html>
