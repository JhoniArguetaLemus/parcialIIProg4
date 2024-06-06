<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Panel de Administrador</title>
    <style>
        body {
            background-image: url('https://static.vecteezy.com/system/resources/previews/006/712/977/non_2x/abstract-health-medical-science-healthcare-icon-digital-technology-doctor-concept-modern-innovation-treatment-medicine-on-hi-tech-future-blue-background-for-wallpaper-template-web-design-vector.jpg');

            background-size: cover;
            background-repeat: no-repeat;

            font-size: 1.5rem;
            font-family: sans-serif
        }

        .bienvenida {

            margin-left: auto;
            margin-right: auto;

            text-align: center;
            background-color: #0092ca;
            padding-bottom: 6rem;
            padding-top: 6rem;
            color: white;
            opacity: 0.8;
        }

        .enlaces {
            background-color: #bae8e8;
            display: flex;
            flex-direction: column;

            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            opacity: 0.8;
        }

        .pacientes,
        .medicos,
        .citas {

            border-radius: 30px;
            margin-top: 100px;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            transition: ease-in-out;

        }

        .pacientes:hover,
        .medicos:hover,
        .citas:hover {

            box-shadow: 7px 12px 5px 0px rgba(0, 0, 0, 0.47);
            -webkit-box-shadow: 7px 12px 5px 0px rgba(0, 0, 0, 0.47);
            -moz-box-shadow: 7px 12px 5px 0px rgba(0, 0, 0, 0.47);
        }

        @keyframes animacion {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        a {
            width: 50%;
        }

        img {
            border-radius: 20px;
        }

        .citas a {
            width: 30%;
        }
    </style>

</head>

<body>
    <div class="bienvenida">
        <h1>Bienvenido al Panel de Administrador</h1>

        <p>Aquí puedes administrar los pacientes, medicos y otras funciones del sistema.</p>
    </div>



    <div class="enlaces">



        <div class="container ">

            <div class="row">

                <div class="col-lg-6 col-12">

                    <div class="pacientes">
                        <h3>Pacientes <br>Aquí puedes añadir, eliminar o modificar pacientes.</h3>
                        <img src="https://img.freepik.com/vector-gratis/doctor-examinando-paciente-clinica-ilustrada_23-2148856559.jpg"
                            alt="" width="400"><br>
                        <a class="btn btn-primary" href="{{route('pacientes.mostrar')}}">Pacientes</a> </br></br>
                    </div>





                </div>


                <div class="col-lg-6 col-12">
                    <div class="medicos">
                        <h3>Medicos <br>Aquí puedes añadir, eliminar o modificar medicos.</h3>
                        <img src="https://img.freepik.com/foto-gratis/medico-mujeres-hospital-estetoscopio_23-2148827781.jpg"
                            alt="" width="400"></br>
                        <a class="btn btn-primary" href="{{route('medicos.mostrar')}}">Medicos</a></br></br>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-12">

                    <div class="citas">
                        <h3>Citas medicas <br> Aquí puedes añadir y eliminar  citas.</h3>
                        <img src="https://play-lh.googleusercontent.com/A9kmwxo2f7DyIa3c6QCq3-mCQ3MenMPzQ5w8BBmdXs2KJEH1WIchR2ncM9uSACdXinn6"
                            alt="imagen cita medica" width="400">
                        <a class="btn btn-primary" href="{{route('pacientes.mostrar_citas')}}">Citas</a>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>