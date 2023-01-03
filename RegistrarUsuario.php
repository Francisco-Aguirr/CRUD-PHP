<?php

  include "Config/Conexion.php";

  $nombre = $_POST["Nombre"];
  $apellido = $_POST["Apellido"];
  $correo = $_POST["Correo"];
  $clave = $_POST["Clave"];

  $sql = "INSERT INTO Users(Nombre, Apellido, Correo, Clave) VALUES('$nombre', '$apellido', '$correo','$clave')";

  $resultado = $conexion -> query($sql);

  if($resultado){
    header('location: Index.php');  
  }else{
  echo "datos no insertados";
  }

  

?>