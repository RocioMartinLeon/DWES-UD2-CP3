<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <title>Carrito la compra</title>
</head>
<body>

  <?php
  if (isset($_COOKIE['productos'])) {
    foreach ($_COOKIE['productos'] as $name => $value) {
      setcookie("productos[$name]", NULL, strtotime('-1 day'));
    }
  }
  ?>

  <input type="button" onclick="window.location.href = 'carrito.php';" value="Volver"/>
</body>
</html>
