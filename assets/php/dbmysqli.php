<?php
class dbmysqli{
  public $conn;
  private $host = "localhost";
  private $usuario = "c0260330";
  private $clave = "LUri07geze";
  private $db = "c0260330_tkvprb";

  public function __construct(){
    $this->conn = new mysqli($this->host,$this->usuario,$this->clave,$this->db) or die("MySQL Connection Error");
  }

  public function insertar($tabla,$campos,$datos){
    if($this->conn->query("INSERT INTO $tabla ($campos) VALUES ($datos)")===TRUE){
      return "true";
    }else{
      return "false";
    }
  }
  public function modificar($tabla,$campos,$condicion){
    if($this->conn->query("UPDATE $tabla SET $campos $condicion")===TRUE){
      return "true";
    }else{
      return "false";
    }
  }
  public function eliminar($tabla,$condicion){
    if($this->conn->query("DELETE FROM $tabla WHERE $condicion")){
      echo "true";
    }else{
      echo "false";
    }
  }
  public function buscar($tabla,$condiciones){
    if($condiciones == ""){
      $resultado = $this->conn->query('SELECT * FROM $tabla');
      return $resultado;
    }else{
      $sql = "SELECT * FROM ".$tabla." ".$condiciones;
      $resultado = $this->conn->query($sql) or trigger_error($this->conn->error."[$sql]");
      return $resultado;
    }
  }
  public function personalizada($sentencia){
    $resultado = $this->conn->query($sentencia) or trigger_error($this->conn->error."[$sentencia]");
    return $resultado;
  }

  public function prueba(){
    return "hola";
  }

}
