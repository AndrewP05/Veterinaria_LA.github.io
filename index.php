<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veterinaria L.A.</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://127.0.0.1:5500/assets/css/estilos.css   ">
    </head>
    <body>
        <main>
            <!--Contenedor que tiene todo a la vista-->
            <div class="Contenedor_full">
                <div class="Recuadro_atras">
                    <!--Vista del LogIn-->
                    <div class="Recuadro_logIn">
                        <h3>¿Tienes una cuenta?</h3>
                        <p>¡Inicia sesión!</p>
                        <button id="boton_iniciarS">Iniciar sesión</button>
                    </div>
                    <!--Vista del Register-->
                    <div class="Recuadro_register">
                        <h3>¿No tienes una cuenta?</h3>
                        <p>¡Registrate!</p>
                        <button id="boton_registrarse">Registrarse</button>
                    </div>
                </div>
                <div class="Contenedor_logIn-Register", style="text-align: center;">
                    <!--Formulario LogIn-->
                    <form action="" class="formulario_logIn">
                        <h2>Iniciar sesión</h2>
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Iniciar sesión</button>
                    </form>
                    <!--Formulario Register-->
                    <form action="php/Registro_usuario_be.php" method="POST" class="formulario_register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Numero De Cedula" name="Cedula">
                        <input type="text" placeholder="Nombre Completo" name="Nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="Correo">
                        <input type="text" placeholder="Celular" name="Celular">
                        <input type="password" placeholder="Contraseña"name = "Contrasena">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="assets/js/script.js"></script>
    </body>
</html>