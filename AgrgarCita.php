<?php

  include "Config/Conexion.php";

  $consulta = $_POST["Consulta"];
  $seleccion = $_POST["selecionar"];
  $nombreCliente = $_POST["Nombre"]; 
  $fecha = $_POST["Fecha"]; 
  $contact = $_POST["Contacto"];

  $sql = "INSERT INTO Citas(Consulta, Seleccion, Nombre, Fecha, Contacto) VALUES('$consulta', '$seleccion', '$nombreCliente','$fecha', '$contact')";

  $resultado = $conexion -> query($sql);

  if($resultado){
     header('location: TablaCitas.php');
  }else{
    echo "datos no insertados";
  }

?>