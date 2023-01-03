<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../mewamata/favicon/icons8-google-code-64.png"/>
    <title>Modificar Cita</title>
</head>

<body>
    <?php
        include "Config/Conexion.php";
        $Id = $_REQUEST['Id'];

        $Sql = "SELECT * FROM Citas WHERE Id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Modificar Cita</h1>
        </center>
        <form action="EditarCitas.php?IdEditar=<?php echo $Fila["Id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Consulta</label>
            <textarea class="form-control" id="" rows="3" name="Consulta" value="<?php echo $Fila['Consulta']?>"></textarea>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="NombreCliente" value="<?php echo $Fila['Lenguajes']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="Fecha" value="<?php echo $Fila['Lenguajes']?>">
        </div>
        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contacto</label>
            <input type="text" class="form-control" name="Contacto">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="TablaCitas.php" class="btn btn-info">Regresar</a>
        </form>


    </div>

</body>

</html>