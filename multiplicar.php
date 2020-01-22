<html>
<head>
  <meta charset="utf-8">
  <title>Tablas de multiplicar</title>
</head>
<body>

<?php
$tablas=[
"Primera"=>5,
"Segunda"=>13,
"Tercera"=>11
];

//Aquí creo la tabla con el borde y tamaño que queremos
  echo "<table border=1 cellspacing=0 cellspading=0>";
//Color de las dos celdas superiores
//Además uso cursivas tal como en el ejemplo del ejercicio
echo "<tr bgcolor=	CCE1EF>";
//Creo la primera fila
foreach ($tablas as $celda => $valor) {
  echo"<th> $celda tabla </th>";
  }

  echo "</tr>";
  //Ahora creo las filas
  for ($i=1;$i<=10;$i++){

    echo "<tr>";
    //Creo las celdas
   foreach ($tablas as $valor){
//Realizo el algoritmo de la multiplicación
     echo "<td>".$valor. "x".$i."=".$valor*$i."</td>";
   }
   echo "</tr>";
  }
echo "</table>";

?>

</body>
</html>
