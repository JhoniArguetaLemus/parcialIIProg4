
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  href="/css/paciente.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Editar Pacientes</title>
</head>
<body>

    
    <section class="formulario">

     <h1>Editar paciente</h1>


 

    <form method="POST" class="datos_paciente" action="{{route('pacientes.actualizar', $paciente->id_paciente)}}" >
   
    @csrf
    @method('PUT')

    
    <input class="form-control" type="text" name='nombre' placeholder="Nombre" required value="{{$paciente->nombre}}"><br><br>
    <input class="form-control" type="text" name='apellido' placeholder="Apellido" required value="{{$paciente->apellido}}"><br><br>
    <input class="form-control" type="date" name='fecha_nacimiento' placeholder="Nombre" required value="{{$paciente->fecha_nacimiento}}"><br><br>
    <input class="form-control" type="text" name='genero' placeholder="Genero" required value="{{$paciente->genero}}"><br><br>
    <input class="form-control"  type="text" name='direccion' placeholder="Direccion" required value="{{$paciente->direccion}}"><br><br>
    <input class="form-control"  type="text" name='telefono' placeholder="Teléfono" required value="{{$paciente->telefono}}"><br><br>
    <input class="form-control" type="text" name='correo' placeholder="Correo" required value="{{$paciente->correo}}"><br><br>


    <button type="submit" class="btn btn-primary guardar">Guardar</button>

    <a href="{{route('pacientes.mostrar')}}" class="btn btn-primary btn-inicio ver"  >Ver pacientes</a>
     
     
    <a href="{{route('home')}}" class="btn btn-primary btn-inicio"  >Inicio</a>

    </form>
   
    </section>
   
    
</body>
</html>