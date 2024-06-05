<?php

include 'conexion_be.php';
if (!empty($_POST["btnIngresar"])){
    if (empty($_POST["correoingresar"])or empty($_POST["contraingresar"])){
        echo'<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    }else {
        $correoingresar=$_POST["correoingresar"];
        $contraingresar=$_POST["contraingresar"];
        $sql = $conexion->query("select * from usuarios where correo='$correoingresar' and contra='$contraingresar'");
        if ($datos=$sql->fetch_object()){
            header("location:../Inicio");
        } else{
            echo'<div class="alert alert-danger">USUARIO O CONTRASEÑA INCORRECTAS</div>';
        }
    }

    }

?>