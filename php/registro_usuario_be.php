<?php

    include 'conexion_be.php';
    
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];

    if (datosVacios ($usuario, $correo, $contra, $conexion)==3){
        echo '<script>
        alert("Datos incompletos, intente de nuevo");
        window.location = "../index.php";
        </script>';
    } elseif (buscarRepetido ($usuario, $correo, $conexion)==1){
        echo '<script>
        alert("Datos ya registrados, intente de nuevo");
        window.location = "../index.php";
        </script>';
    } else {

    $query = "INSERT INTO usuarios(usuario, correo, contra)
            VALUES('$usuario','$correo','$contra')";

    $ejecutar = mysqli_query($conexion, $query);
    echo '<script>
    alert("Usuario registrado, Bienvenido");
    window.location = "../index.php";
    </script>';
    } 
    
/*------------------------------------------FUNCIONES-----------------------------------------------------*/

    function buscarRepetido ($user, $mail, $conexion){
        $sql = "SELECT * FROM usuarios WHERE usuario = '$user' or correo='$mail'";
        $result = mysqli_query($conexion,$sql);

        if (mysqli_num_rows($result) > 0){
            return 1;
        } else {
            return 0;
        }
    }

    function datosVacios ($users, $mails, $pass, $conexion){
            if (empty($_POST["usuario"])or empty($_POST["correo"]) or empty($_POST["contra"])){
                return 3;
            } else {
                return 2;
            }
    }
    

    mysqli_close($conexion);
?>