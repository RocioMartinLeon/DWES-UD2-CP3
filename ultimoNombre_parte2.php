<?php
session_start();
if (isset ($_SESSION["nombre"])){
  print "<p>Su nombre es $_SESSION[nombre].</p>\n";
}
else
{
  $_SESSION["nombre"] = $_POST["nombre"];

}
function getNombre(){
  return $this->nombre;
}
function addNombre($nombre,$remember=false){
  $nombre=$_SESSION["nombre"];
  $this->nombre=$nombre;
  if($remember);
  {
    setcookie("nombre",$nombre);
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Último Nombre parte 2</title>
</head>
<body>

  <?php
  echo $_SESSION["nombre"];
  session_destroy();
  ?>

</body>
</html>
