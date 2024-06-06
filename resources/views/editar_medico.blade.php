
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  href="/css/paciente.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Editar medicos</title>
</head>
<body class="medico">

    
    <section class="formulario">

     <h1 class="text-light">Editar medico</h1>


 

    <form method="POST" class="datos_paciente" action="{{route('medicos.actualizar', $medico->id_medico)}}" >
   
    @csrf

    @method('PUT')

    
    <input class="form-control" type="text" name='nombre' placeholder="Nombre" required value="{{$medico->nombre}}"><br><br>
    <input class="form-control" type="text" name='apellido' placeholder="Apellido" required value="{{$medico->apellido}}"><br><br>
    <input class="form-control" type="text" name='especialidad' placeholder="Especialidad" required value="{{$medico->especialidad}}"><br><br>
    <input class="form-control"  type="text" name='horario_consultas' placeholder="Horario consultas" required value="{{$medico->horario_consultas}}"><br><br>
    <input class="form-control"  type="text" name='telefono' placeholder="Teléfono" required value="{{$medico->telefono}}"><br><br>
    <input class="form-control"  type="text" name='correo' placeholder="Correo" required value="{{$medico->correo}}"><br><br>
  


    <button type="submit" class="btn btn-primary guardar">Actualizar</button>
    <a href="{{route('medicos.mostrar')}}" class="btn btn-primary btn-inicio" >Regresar</a>
   

    </form>
   
    </section>
   
    
</body>
</html>