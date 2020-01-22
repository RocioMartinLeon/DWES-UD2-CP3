<?php
class Alumno2{

private $nombre;
private $edad;
private $curso;

public function __construct($nombre, $edad, $curso){
$this->nombre = $nombre;
$this->edad = $edad;
$this->curso = $curso;
}

public function getNombre(){
  return $this->nombre;
}
public function setNombre($nombre) {
   $this->nombre=$nombre;
 }
 public function getEdad(){
   return $this->edad;
 }
 public function setEdad($edad) {
    $this->edad=$edad;
  }
  public function getCurso(){
    return $this->curso;
  }
  public function setCurso($curso) {
     $this->curso=$curso;
   }
   public function Imprimir(){
     echo '<br>';
     echo 'El nombre del alumno es ';
     echo $this->nombre;
     echo '</br>';
     echo '<br>';
     echo 'Su edad es ';
     echo $this->edad;
     echo '</br>';
     echo '<br>';
     echo 'El curso es ';
     echo $this->curso;
     echo '</br>';
   }
}
 ?>
