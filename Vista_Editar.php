<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../mewamata/favicon/icons8-google-code-64.png"/>
    <title>Modificar Coder</title>
</head>

<body>
    <?php
        include "Config/Conexion.php";
        $Id = $_REQUEST['Id'];

        $Sql = "SELECT * FROM Coders WHERE Id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Modificar Coder</h1>
        </center>
        <form action="EditarCoder.php?IdEditar=<?php echo $Fila["Id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="NombreCoder" value="<?php echo $Fila['Nombre']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lenguajes</label>
            <input type="text" class="form-control" name="LenguajesCoder" value="<?php echo $Fila['Lenguajes']?>">
        </div>

        <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" alt="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Imagen</label>
            <input type="File" class="form-control" name="ImagenCoder">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="Index.php" class="btn btn-info">Regresar</a>
        </form>


    </div>

</body>

</html>