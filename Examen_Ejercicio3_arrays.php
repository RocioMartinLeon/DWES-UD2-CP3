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
  $x=-1;
  for ($i=0;$i<$max_valor;$i++) {
    $num_aleatorio = rand(1,20);
    array_push($valores,$num_aleatorio);
  }


  foreach ($valores as $valor){
    $x++;
    echo "Elemento " .$x."->";
    echo $valor."<br/>";
  }
  echo "</br>";
  echo "El máximo es: " ;
  echo max ($valores);
  ?>
</body>
</html>
