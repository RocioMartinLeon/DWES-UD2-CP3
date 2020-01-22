<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<table border=1 cellspacing=0 cellspading=0>";
    $x=1;
    $resultado=0;

    for ($x1=1; $x1<=10; $x1++)
    {
      echo "<tr>";

      for ($x2=1; $x2<=10; $x2++)
      {
        echo "<td>", $x, "</td>";
        $x=$x+1;
        $resultado += $x;
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
