<?php 
class Mysql extends Conexion{
  private $conexion;
  private $strQuery;
  private $arrayValue;
  public function __construct()
  {
    $this->conexion =new Conexion();
    $this->conexion =$this->conexion->connect();
  }
  public function insert(string $query, array $arrayValue)
  {
    $this->strQuery=$query;
    $this->arrayValue = $arrayValue;
    $insert = $this->conexion->prepare($this->strQuery);
    $resInsert = $insert->execute($this->arrayValue);
    if ($resInsert) {
      $lastInsert = $this->conexion->lastInsertId();
    }else{
      $lastInsert = 0;
    }
    return $lastInsert;
  }
  public function select(string $query)
  {
    $this->strQuery=$query;
    $result=$this->conexion->prepare($this->strQuery);
    $result->execute();
    $data= $result->fetch(PDO::FETCH_ASSOC);
    return $data;
  }
   public function selectAll(string $query){
    $this->strQuery=$query;
    $result=$this->conexion->prepare($this->strQuery);
    $result->execute();
    $data= $result->fetchall(PDO::FETCH_ASSOC);
    return $data;
  }
  public function update(string $query, array $arrayValue)
  {
      $this->strQuery=$query;
    $this->arrayValue = $arrayValue;
    $update = $this->conexion->prepare($this->strQuery);
    $resExucute = $insert->execute($this->arrayValue);
    return $resExucute;
  }
  public function delete(string $query)
  {
    $this->strQuery=$query;
    $result=$this->conexion->prepare($this->strQuery);
    $result-execute();
    return $result;
  }

}
?>



// public function insertUsuario(string $nombre,int $telefono,string $email){
//   $this->strNombre=$nombre;
//   $this->intTelefono=$telefono;
//   $this->strEmail = $email;

//   $sql = "INSERT INTO usuario(nombre,telefono,email) VALUES(?,?,?)";
//   $insert = $this->conexion->prepare($sql);
//   $arrDatos = array($this->strNombre,$this->intTelefono,$this->strEmail);
//   $resInsert= $insert->execute($arrDatos);
//   $idInser = $this->conexion->lastinsertId();
//   return $idInser;
// } 
// public function getUsuarios(){
//   $sql = "SELECT * FROM usuario";
//   $execute = $this->conexion->query($sql);
//   $request= $execute->fetchall(PDO::FETCH_ASSOC);
//   return $request;
// }
// public function updateUser(int $id,string $nombre,int $telefono,string $email)
// {
//  $this->strNombre=$nombre;
//   $this->intTelefono=$telefono;
//   $this->strEmail = $email;
//   $sql = "UPDATE usuario SET nombre=?,telefono=?,email=? WHERE id=$id";
//   $update = $this->conexion->prepare($sql);
//   $arrDatos=array($this->strNombre,$this->intTelefono,$this->strEmail);
//   $resexecute=$update->execute($arrDatos);
//   return $resexecute;
// }
// public function getUser(int $id)
// {
//   $sql = "SELECT * FROM usuario WHERE id=?";
//   $arrWhere=array($id);
//   $query=$this->conexion->prepare($sql);
//   $query->execute($arrWhere);
//   $request = $query->fetch(PDO::FETCH_ASSOC);
//   return $request;
// }
// public function deleteUser(int $id){
//   $sql="DELETE FROM usuario WHERE id=?";
//   $arrWhere=array($id);
//   $delete=$this->conexion->prepare($sql);
//   $del=$delete->execute($arrWhere);
// return $del;
// }
// }
