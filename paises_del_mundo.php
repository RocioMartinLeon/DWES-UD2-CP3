<?php
//crear el objeto de conecxión
$mysqli=new mysqli("127.0.0.1", "root" ,"" ,"paises");
if ($mysqli->connect_errno) {
  //ha habido error
  echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")
  " . $mysqli->connect_error;
}else{
  //no ha habido error
  echo "Conexión realizada<br>";
}

//hacemos una consulta
$resultado=$mysqli->query("SELECT * FROM pais");
echo "<table border=1 cellspacing=0 cellspading=0>";
echo "<tr>";
echo "<th width='10px'>"."id"."</th>";
echo "<th width='70px'>"."País"."</th>";
echo "<th width='89px'>"."Continente"."</th>";
echo "</tr>";

for($i=0;$i<$resultado->num_rows;$i++) {
  $fila=$resultado->fetch_assoc();
  echo "<tr>";
  echo "<td width='14px'>" .$fila['id']."</td>";
  echo "<td width='69px'>" .$fila['Nombre']."</td>";
  echo "<td width='89px'>" .$fila['Continente']."</td>";
  echo "</tr>";
}
echo "</table>";
?>
