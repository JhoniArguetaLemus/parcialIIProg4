<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://static.vecteezy.com/system/resources/previews/006/712/977/non_2x/abstract-health-medical-science-healthcare-icon-digital-technology-doctor-concept-modern-innovation-treatment-medicine-on-hi-tech-future-blue-background-for-wallpaper-template-web-design-vector.jpg');

            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 500px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

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
    <div class="container">
        <h2 class="text-center">Crear cuenta</h2>
        <form action="{{route('guardar_usuario')}}" method="POST" id="formulario_registro">
            @csrf

            <img src="https://cdn-icons-png.flaticon.com/512/6210/6210134.png" alt="imagen crear cuenta" width="300">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" required
                    pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]+" title="Solo se permiten letras y espacios">

            </div>
            <div class="form-group ">

                <label for="password">Contraseña</label>
                <div class="contrasenna">
                    <input type="password" name="contrasenna" id="contrasenna" class="form-control" required
                        pattern="(?=.*\d)(?=.*[a-zA-Z])(?=.*\W).{8,}"
                        title="La contraseña debe tener al menos 8 caracteres, incluyendo al menos un número, una letra y un símbolo">
                    <button type="button" onclick="ver_ocultar_contrasenna()" class="ver"><img
                            src="https://cdn-icons-png.flaticon.com/512/14/14777.png" width="30" />
                    </button>
                </div>

            </div>
            <div class="form-group">
                <label for="confirmar_contrasenna">Confirmar Contraseña</label>
                <input type="password" name="confirmar_contrasenna" id="confirmar_contrasenna" class="form-control"
                    required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Crear cuenta</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>

        document.getElementById('formulario_registro').addEventListener('submit', function (event) {
            var password = document.getElementById('contrasenna').value;
            var passwordConfirmation = document.getElementById('confirmar_contrasenna').value;
            if (password !== passwordConfirmation) {
                event.preventDefault();
                alert("Las contraseñas no coinciden")


            }
        });



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