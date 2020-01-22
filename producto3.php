<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Producto3</title>
</head>
<body>
  <h4>Producto3</h4>
  <form action="carrito.php" method="post">
    <p>Cantidad</> <select name=producto3>
      <option value ="1">1</option>
      <option value ="2">2</option>
      <option value ="3">3</option>
      <option value ="4">4</option>
      <option value ="5">5</option>
      <option value ="6">6</option>
      <option value ="7">7</option>
    </select>
    <input type ="hidden" name="submitted" value="true"></br></br>
    <input type="submit" value="Guardar en la Cesta">
  </form>
  <input type="button" onclick="window.location.href = 'index2.php';" value="Volver"/>
</form>
</body>
</html>
