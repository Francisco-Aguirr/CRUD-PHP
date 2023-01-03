<?php

error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['IdEditar'];

$Consulta = $_POST['Consulta'];
$Nombre = $_POST['NombreCliente'];
$Fecha = $_POST['Fecha'];
$Contacto = $_POST['Contacto'];


$sql = "UPDATE Citas SET 
Consulta = '$Consulta', 
Nombre = '$Nombre',
Fecha = '$Fecha',
Contacto = '$Contacto' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:TablaCitas.php");
}else {
    echo "No se insertaron los datos";
}