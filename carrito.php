<?php
if ($_POST) {
  if (isset ($_POST['producto1'])){
    $producto='Producto1->Cantidad:'.$_POST['producto1'];
    setcookie("productos[$producto]",time()+86400);
  }
  if (isset ($_POST['producto2'])){
    $producto='Producto2->Cantidad:'.$_POST['producto2'];
    setcookie("productos[$producto]",time()+86400);
  }
  if (isset ($_POST['producto3'])){
    $producto='Producto3->Cantidad:'.$_POST['producto3'];
    setcookie("productos[$producto]",time()+86400);
  }
  if (isset ($_POST['producto4'])){
    $producto='Producto4->Cantidad:'.$_POST['producto4'];
    setcookie("productos[$producto]",time()+86400);
  }

}
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <title>Carrito la compra</title>
</head>
<body>
  <?php
  if (isset($_COOKIE['productos'])) {
    echo "Productos en Cesta: <br>";
    foreach ($_COOKIE['productos'] as $name => $value) {
      $name = htmlspecialchars($name);
      $value = htmlspecialchars($value);
      print "$name  <br />\n";
    }


  }
  else{
    print "Cesta Vacia  <br />\n";
  }

  ?>
</br>
<input type="button" onclick="window.location.href = 'index2.php';" value="Volver"/>
<input type="button" onclick="window.location.href = 'carrito.php';" value="Actualizar Cesta"/>
<input type="button" onclick="window.location.href = 'vaciar.php';" value="Borrar Cesta"/>
</body>
</html>
