<?php
include "thronesDB.php";

class JuegoDeTronos extends thronesDB
{
  function __construct()
   {
   parent::__construct();
  }

  public function listaActores(){
    $sql= "SELECT * FROM cast";
    $tabla=$this->realizarConsulta($sql);
    if ($tabla != null){
      return $tabla;
    }else{
      return null;
    }
    }

    public function resumenSerie(){
      $sql= "SELECT plot FROM titles";
      $tabla=$this->realizarConsulta($sql);
      if ($tabla != null){
        return $tabla;
      }else {
        return null;

      }
    }

    public function actoresPorTemporada($temporada){
      $sql="SELECT * FROM season_ep WHERE season='" .$temporada. "';";
      $tabla=$this->realizarConsulta($sql);
      if ($tabla!=null){
        return $tabla;
      }else {
        return null;
      }
    }
}
 ?>
