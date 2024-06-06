<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="/css/mostrar.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Mostrar pacientes</title>
</head>
<body class="mostrar_medico">

<section class="mostrar_pacientes">



   <h3 class="text-light">Listado de medicos</h3>
    
<table  class="table table-dark table-striped-columns" >

<thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Especialidad</th>
            <th>Horario</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acción</th>
            <th>Acción</h>
        
           
        </tr>


      
    </thead>

    <tbody>

      @foreach ($medicos as $medico)


      <tr>

        <td>{{$medico->id_medico}}</td>
        <td>{{$medico->nombre}}</td>
        <td>{{$medico->apellido}}</td>
        <td>{{$medico->especialidad}}</td>
        <td>{{$medico->horario_consultas}}</td>
        <td>{{$medico->telefono}}</td>
        <td>{{$medico->correo}}</td>
  
      
        <td> 
        
        <form action="{{route('medicos.eliminar',$medico->id_medico )}}" method="POST">
             @csrf
             @method('DELETE')
 
              <button class="btn btn-danger" type="submit">Eliminar</button>
     
     
         </form>
 
        </td>

        <td>
        <form action="{{ route('medicos.editar', $medico->id_medico) }}" method="GET">
            @csrf
            <button class="btn btn-primary" type="submit">Editar</button>
        </form>

        </td>

     </tr>

     @endforeach

     </tbody>


</table>

<a class="btn btn-primary" href="{{route('medicos.agregar')}}">Agregar medico</a>
<a href="{{route('panel_administracion')}}" class="btn btn-primary btn-inicio" >Regresar</a>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>