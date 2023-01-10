<?php

include "Config/Conexion.php";

if(!empty($_POST["btningresar"])){

  if(empty($_POST["E_mail"]) and empty($_POST["Pass_word"])){
    echo '<div class="alert alert-danger">Los campos estan vacíos</div>';
  }else{
    $email=$_POST["E_mail"];
    $password=$_POST["Pass_word"];
    $sql=$conexion->query("SELECT * FROM Users where Nombre='$email' and Clave='$password'");
    if($datos=$sql->fetch_object()){
         header("location:home.php");
    }else{
        echo '<div class="alert alert-danger">Usuario no encontrado, Registrate para continuar</div>';
    }
  }

}

?>