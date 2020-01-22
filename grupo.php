<?php
include 'alumno.php';

$alumno1=new alumno();
$alumno2=new alumno();

$alumno1->cambiarNombre("Rocío");
$alumno2->cambiarNombre("Alejandro");
$alumno1->mostrarNombre();
$alumno2->mostrarNombre();
 ?>
