<?php
class Gato{

  private $color;
  private $raza;
  private $edad;
  private $peso;
  private $sexo;

  public function maulla(){
    echo 'miauuu</br>';
  }
  public function ronronea(){
  }
  public function come($valor){
    $valor;
    if ($valor=='pescado'){
      echo "Hmmmm, gracias</br>";
    }
    else{
      echo 'Lo siento, yo solo como pescado</br>';
    }
  }
  public function peleaCon($sexo){
    $this->sexo=$sexo;
    if ($sexo=='macho'){
      echo 'no me gusta pelear</br>';

    }else{
      echo 'no peleo contra gatitas</br>';
    } 
  }
}

?>
