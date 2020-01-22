<?php
include 'alumno2.php';

$alumno1=new alumno2("",0,"");


$alumno1->getNombre();
$alumno1->setNombre("Rocío");
$alumno1->getEdad();
$alumno1->setEdad(33);
$alumno1->getCurso();
$alumno1->setCurso("2º DAW");
$alumno1->Imprimir();

 ?>
