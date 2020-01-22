<?php
class Alumno{

public $nombre;
public $edad;
public $curso;

public function cambiarNombre($nombre){
  $this->nombre=$nombre;
}
public function mostrarNombre(){
  echo '<br>';
  echo 'El nombre del alumno es ';
  echo $this->nombre;
  echo '</br>';
}

}
 ?>
