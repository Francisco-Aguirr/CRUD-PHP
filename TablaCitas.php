<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla de Citas</title>
    <link rel="icon" type="image/jpg" href="../mewamata/favicon/icons8-google-code-64.png"/>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      
</head>
  <body>
     <div class="container">
      <br>
      <center>
      <h3>Lista de Citas</h3>
      </center>
     </div>
    <br>
   <div class="container">
    <a href="Index.php" class="btn btn-dark">Regresar</a>
   </div>
   <br>
        <div class="container">
              <br>
              <hr>
                    
              <table class="table">
               
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Consulta</th>
                        <th scope="col">Coder Selecionado</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Contacto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
               
                <tbody>
                    <?php
                    include "Config/Conexion.php";

                    $Sql = "SELECT * FROM Citas";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['Id']?></th>
                            <td><?php echo $Fila['Consulta']?></td>
                            <td><?php echo $Fila['Seleccion']?></td>
                            <td><?php echo $Fila['Nombre']?></td>
                            <td><?php echo $Fila['Fecha']?></td>
                            <td><?php echo $Fila['Contacto']?></td>
                            
                            <td>
                                <a href="Vista_editar_cita.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-warning">Editar</a>
                                <a href="Eliminar_cita.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
                          
                           
                     
        </div>

        

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
