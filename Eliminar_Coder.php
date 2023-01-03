<?php

    include "Config/Conexion.php";

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM Coders WHERE Id = $Id";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: Index.php");
    }else {
        echo "No se elimino el dato";
    }