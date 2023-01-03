

<!doctype html>
<html lang="en">

<head>
  <title>Suscribete</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <br><br>
  <div class="container">
        <form action="RegistrarUsuario.php" method="POST">
          <h2 class="titulo">Registrar</h2>

            

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="" name="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="Apellido">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control"  aria-describedby="emailHelp" name="Correo">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control"  name="Clave">
                    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-success" name="Registrar">Submit</button>
                <a href="../mewamata/home.php" class="btn btn-primary">Inicio</a>
        </form>
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
