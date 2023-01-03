<?php

error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['IdEditar'];

$Nombre = $_POST['NombreCoder'];
$Lenguajes = $_POST['LenguajesCoder'];
$imagen = addslashes(file_get_contents($_FILES['ImagenCoder']['tmp_name']));


$sql = "UPDATE Coders SET 
Nombre = '$Nombre', 
Lenguajes = '$Lenguajes',
Imagen = '$imagen' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:Index.php");
}else {
    echo "No se insertaron lod datos";
}