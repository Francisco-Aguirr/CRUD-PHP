<?php

include "Config/Conexion.php";

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM Citas WHERE Id = $Id";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: TablaCitas.php");
    }else {
        echo "No se elimino el dato";
    }