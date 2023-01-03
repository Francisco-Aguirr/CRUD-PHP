<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/jpg" href="../mewamata/favicon/icons8-google-code-64.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>coder's consultory</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!--SweetAlert-->
  <link rel="stylesheet" href="../mewamata/plugins/sweetalert/dist/sweetalert2.min.css">
  </head>
  <body>
     <div class="container">
      <br>
      <center>
      <h3>Lista de Coders</h3>
      </center>
     </div>
    <br>
   <div class="container">
    <a href="NuevoCoder.php" class="btn btn-dark">Agregar Coder</a>
    <a href="TablaCitas.php" class="btn btn-info">Ver Citas</a>
    <a href="../mewamata/home.php" class="btn btn-dark">Inicio</a><br>
   </div>
   <br>
        <div class="container container-cards">
              <br>
              <hr>
                    <?php
                        include "Config/Conexion.php";
                          
                        $Sql = "SELECT * FROM Coders";
                        $resultado = $conexion->query($Sql);

                        while($Fila = $resultado->fetch_assoc()){ ?>

                          
                            <br>
                          
                                <div class="card" style="width: 18rem; margin: 5px;">
                                        <img src="data:image/jpg;base64,<?php echo base64_encode($Fila['Imagen'])?>" class="card-img-top card-foto" style="height: 16rem;">
                                        <div class="card-body">
                                          <h5 class="card-title"><?php echo $Fila['Nombre']?></h5>
                                          <p class="card-text"><?php echo $Fila['Lenguajes']?>.</p>
                                          <a href="Cita.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-success">Cita</a>
                                          <a href="Vista_Editar.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-warning">Editar</a>
                                          <a href="Eliminar_Coder.php?Id=<?php echo $Fila["Id"]?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                </div>
                                <br>
                         
                      <?php } ?>
                      
        </div>

        
       
        <script src="../mewamata/plugins/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
