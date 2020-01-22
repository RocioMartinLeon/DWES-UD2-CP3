<?php
class thronesDB
{
  private $host="127.0.0.1";
  private $user="root";
  private $pass="";
  private $db_name="gameofthrones.sql";
  private $conexion;
  private $error=false;
  private $error_msj="";
  private $puerto=33065;
  function __construct()
  {
    $this->conexion=new mysqli($this->host,$this->user,
    $this->pass,$this->db_name,$this->puerto);//,$this->puerto);
  if ($this->conexion->connect_errno){

    $this->error=true;
    $this->error_msj="No se ha podido realizar la conexión a la base de datos";
  }
}
  public function hayError(){
    return $this->error;
  }
  public function msjError(){
    return $this->error_msj;
  }
  /*public function realizarConsulta($consulta){
    if ($this->error==false){
      $resultado=$this->conexion->query($consulta);
      return $resultado;

    }else{
      $this->error_msj="Imposible realizar la consulta: ".$consulta;
      return null;
    }*/
    public function realizarConsulta($sql){
      $table=[];
      if($this->error==false){
        $resultado=$this->conexion->query($sql);
        while($fila=$resultado->fetch_assoc()){
          $table[]=$fila;
        }
        return $table;
      }else{
        $this->error_msj="Error al realizar la consulta".$sql;
        return null;
      }
    }
  }

?>
