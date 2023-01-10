<!doctype html>
<html lang="en">

<head>
  <title>Citas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <br>
  <div class="container">
    <center>
      <h3>Programación de citas</h3>
    </center>
  </div>
  <div class="container">
    <form action="AgrgarCita.php" method="POST" enctype="multipart/form-data">
          <a href="Index.php" class="btn btn-dark">Regresar</a><br>
          <br>

          
          <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Consulta</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Consulta"></textarea>
          </div>
          <select class="form-select" aria-label="Default select example" name="selecionar">
              <option selected>Confirma o selecciona un Coder</option>
              

              <?php 
              include "Config/Conexion.php";
              $consulta = "SELECT * FROM Coders";
              $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
              ?>
              <?php foreach($ejecutar as $opciones): ?>

                <option value="<?php echo $opciones['Nombre']?>"><?php echo $opciones['Nombre']?></option>

                <?php endforeach?>


             
          </select><br>
          <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Nombre" placeholder="">
          </div>
          <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="Fecha" placeholder="">
          </div>
          <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contacto</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Contacto" placeholder="name@example.com">
          </div>
          <button class="btn btn-info" type="submit">Enviar</button>
  </div>










  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>