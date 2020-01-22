<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulario</title>
</head>
<body>
  <form action="UD6_AC2_RESPUESTA.php" method="post">
    <select name="tipocalle">
      <option value="calle">Calle</option>
      <option value="avenida">Avenida</option>
         <option value="plaza">Plaza</option>
      </select>
    <p>Calle <input type="text" name="calle" /></p>
    <p>Número <input type="text" name="numero" /></p>
    <p>Población <input type="text" name="poblacion" /></p>
    <p>País <input type="text" name="pais" /></p>
    <p><input type="submit" /></p>
  </form>
</body>
</html>
