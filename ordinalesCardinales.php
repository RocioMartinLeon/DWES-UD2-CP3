<html>
<head>
  <meta charset="utf-8">
  <title>Números ordinales y cardinales</title>
</head>
<body>

    <?php
        //Aqui creo la tabla con el borde y tamaño que queremos
          echo "<table border=1 cellspacing=0 cellspading=0>";
    //Color de las dos celdas superiores
    //Además uso cursivas tal como en el ejemplo del ejercicio
    echo "<tr bgcolor=	CCE1EF>";
    echo  "<th><i>Cardinal</i></th>";
    echo "<th><i>Ordinal</i></th>";
    echo "</tr>";
//Cierro la primera fila y comienzo la estructura while para los números
  $i=0;
  //En el while voy cargando los td hasta el 10 incrementándolo
 while($i <10){
    //Abro el segundo tr que no cierro hasta terminar las dos estructuras
  echo "<tr>";
    ++$i;
         echo  "<td><i>$i</i></td>";

    //En el switch cargo tantos td y case como números tengo (10)
       switch ($i) {
         case 1:
         echo  "<td><i>Primero</i></td>";
         break;
         case 2:
         echo  "<td><i>Segundo</i></td>";
         break;
         case 3:
         echo  "<td><i>Tercero</i></td>";
         break;
         case 4:
         echo  "<td><i>Cuarto</i></td>";
         break;
         case 5:
         echo  "<td><i>Quinto</i></td>";
         break;
         case 6:
         echo  "<td><i>Sexto</i></td>";
         break;
         case 7:
         echo  "<td><i>Séptimo</i></td>";
         break;
         case 8:
         echo  "<td><i>Octavo</i></td>";
         break;
         case 9:
         echo  "<td><i>Noveno</i></td>";
         break;
         case 10:
         echo  "<td><i>Décimo</i></td>";
         break;

}

  //Cierro el tr
  echo "</tr>";
  }
//Cierro la tabla
echo "</table>";
  ?>
</body>
</html>
