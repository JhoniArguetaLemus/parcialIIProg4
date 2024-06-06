<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Formulario de Cita Médica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://fondosmil.co/fondo/56867.jpg');
            padding: 20px;
            font-size: 1.2rem;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(rgb(58, 137, 161), rgb(100, 180, 200), rgb(255, 213, 153));

        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

       
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: rgb(58, 137, 161);
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        select, input, textarea{
            font-size: 1.2rem;
        }

        form{
      
            padding: 2rem;
           
           
        }

        img{
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        .btn-inicio{
            width: 100%;
        }
   
    </style>
</head>
<body>
    <div class="container">
        <h2>Formulario de Cita Médica</h2>
      
        <form action="{{route('cita.guardar')}}" method="post">
        <img src="https://play-lh.googleusercontent.com/A9kmwxo2f7DyIa3c6QCq3-mCQ3MenMPzQ5w8BBmdXs2KJEH1WIchR2ncM9uSACdXinn6" alt="imagen-formulario"width='300'/>
            @csrf
            <div class="form-group">
            <label for="medico">Seleccione un paciente:</label>
                <select id="paciente" name="paciente" required>
                    <option value="">Seleccione un paciente: </option>
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id_paciente }}">{{$paciente->id_paciente}}-> {{ $paciente->nombre }} {{$paciente->apellido}}</option>
                    @endforeach
                </select>
            </div>
          
           
            <div class="form-group">
                <label for="fecha">Fecha de la Cita:</label>
                <input type="datetime-local" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="medico">Seleccione un médico:</label>
                <select id="medico" name="medico" required>
                    <option value="">Seleccione un médico</option>
                    @foreach ($medicos as $medico)
                        <option value="{{ $medico->id_medico }}">{{$medico->id_medico}}->  {{ $medico->nombre }} {{$medico->apellido}}-> {{$medico->especialidad}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="comentarios">Comentarios Adicionales:</label>
                <textarea id="comentarios" name="comentarios" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Hacer cita</button><br><br>
                <a href="{{route('panel_administracion')}}" class="btn btn-primary btn-inicio" >Regresar</a>
               
            </div>

         
        </form>
    </div>
</body>
</html>
