<html>
<?php
$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11
];


echo "<table border=1>";

echo "<tr>";

foreach($tablas as $celda => $valor){
echo"<th> $celda tabla </th>";

}

echo "</tr>";

for($i=1; $i <= 10; $i++){

echo "<tr>";

foreach($tablas as $valor){
  echo "<td>" . $valor. "x" . $i . "=" . $valor * $i . "</td>";
}
  echo "</tr>";
}

echo "</table>";
 ?>
 </html>
