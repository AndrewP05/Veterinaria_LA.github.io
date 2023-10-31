<?php

    include 'Conexion_BE.php';

    $Cedula = $_POST['Cedula'];
    $Nombre_completo = $_POST['Nombre_completo'];
    $Correo = $_POST['Correo'];
    $Celular = $_POST['Celular'];
    $Contrasena = $_POST['Contrasena'];

    $query = "INSERT INTO usuarios(Cedula, Nombre_completo, Correo, Celular, Contrasena) VALUES('$Cedula', '$Nombre_completo', '$Correo', '$Celular', '$Contrasena')";
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado exitosamente");
                window.location = "../index.php";
            </script>';
    }else{
        echo '
            <script>
                alert("Usuario no registrado");
                window.location = "../index.php";
            </script>';
    }

    mysqli_close($conexion);
?>