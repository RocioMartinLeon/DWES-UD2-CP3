<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Creo la tabla
    echo "<table border=1 cellspacing=0 cellspading=0>";
    //Inicio una variable
  $n=1;
  $resultado=0;
  //Utilizo el operador de control for para crear filas
  for ($n1=1; $n1<=10; $n1++)
  {
  echo "<tr>";
  //Creo las celdas
  for ($n2=1; $n2<=10; $n2++)
  {
  echo "<td>", $n, "</td>";
  //Algoritmo para contar de 1 a 100

  $n=$n+1;
  //Va guardando en la variable resultado la suma de la variable
  $resultado += $n;
  }
  echo "</tr>";
  }
  echo "<tr>";
  echo "<td colspan='10'>"," Valor Total : ", $resultado, "</td>";
  echo "</tr>";
echo "</table>";

    ?>
  </body>
</html>
