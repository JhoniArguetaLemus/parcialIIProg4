<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .contrasenna {
            display: flex;
            justify-content: space-evenly;
        }

        .contrasenna input {
            width: 100%;
        }

        
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="{{route('iniciar_sesion')}}" method="POST">
            <img src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" alt="" width="300">
            @csrf
            <label for="usuario">Nombre de usuario</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="password">Contraseña</label>
            <div class="contrasenna">
                <input type="password" id="contrasenna" name="contrasenna" required>
                <button  class="ver" type="button" onclick="ver_ocultar_contrasenna()"><img
                        src="https://cdn-icons-png.flaticon.com/512/14/14777.png" width="30" />
                </button>
                <br>

            </div>

            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <a href="{{route('usuario.crear_cuenta')}}" class="btn btn-secondary">Crear cuenta</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>

    <script>

        function ver_ocultar_contrasenna() {
            var passwordInput = document.getElementById("contrasenna");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>

</html>