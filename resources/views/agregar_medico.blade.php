
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  href="/css/paciente.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Guardar medicos</title>
</head>
<body class="medico">

    
    <section class="formulario">

     <h1 class="text-light">Agregar medico</h1>


 

    <form method="POST" class="datos_paciente" action="{{route('medico.guardar')}}" >
   
    @csrf


    
    <input class="form-control" type="text" name='nombre' placeholder="Nombre" required><br><br>
    <input class="form-control" type="text" name='apellido' placeholder="Apellido" required><br><br>
    <input class="form-control" type="text" name='especialidad' placeholder="Especialidad" required><br><br>
    <input class="form-control"  type="text" name='horario_consultas' placeholder="Horario consultas" required><br><br>
    <input class="form-control"  type="text" name='telefono' placeholder="Teléfono" required><br><br>
    <input class="form-control"  type="text" name='correo' placeholder="Correo" required><br><br>
  


    <button type="submit" class="btn btn-primary guardar">Guardar</button>

    <a href="{{route('medicos.mostrar')}}" class="btn btn-primary btn-inicio ver"  >Ver medicos</a>
     
     
    <a href="{{route('panel_administracion')}}" class="btn btn-primary btn-inicio" >Regresar</a>

    </form>
   
    </section>
   
    
</body>
</html>