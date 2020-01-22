<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $valores = array();
    $max_valor = 10;
    for ($i=0;$i<$max_valor;$i++) {
      $num_aleatorio = rand(1,20);
      array_push($valores,$num_aleatorio);
    }

    for ($x=0;$x<count($valores);$x++){
      echo "Elemento " .$x."->";
      echo $valores[$x]."<br/>";

     }
     echo "</br>";
     echo "El maximo es: " ;
     echo max ($valores);
    ?>
  </body>
</html>
