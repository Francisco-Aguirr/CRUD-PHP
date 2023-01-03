<?php

  include "Config/Conexion.php";

  $nombre = $_POST["Nombre"];
  $lenguajes = $_POST["Lenguajes"];
  $imagen = addslashes(file_get_contents($_FILES["Imagen"]['tmp_name']));

  $sql = "INSERT INTO Coders(Nombre, Lenguajes, Imagen) VALUES('$nombre', '$lenguajes', '$imagen')";

  $resultado = $conexion -> query($sql);

  if($resultado){
    header('location: Index.php');  
  }else{
  echo "datos no insertados";
  }

  

?>