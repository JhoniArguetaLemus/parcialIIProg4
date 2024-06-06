<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="/css/mostrar.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Mostrar pacientes</title>
</head>
<body>

<section class="mostrar_pacientes">



   <h3 class="text-light">Listado de pacientes</h3>
    
<table  class="table table-dark table-striped-columns" >

<thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Genero</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Acción</th>
            <th>Acción</th>
           
        </tr>


      
    </thead>

    <tbody>

      @foreach ($pacientes as $paciente)


      <tr>

        <td>{{$paciente->id_paciente}}</td>
        <td>{{$paciente->nombre}}</td>
        <td>{{$paciente->apellido}}</td>
        <td>{{$paciente->fecha_nacimiento}}</td>
        <td>{{$paciente->genero}}</td>
        <td>{{$paciente->direccion}}</td>
        <td>{{$paciente->telefono}}</td>
        <td>{{$paciente->correo}}</td>
       <td> 
        
       <form action="{{route('pacientes.eliminar',$paciente->id_paciente )}}" method="POST">
            @csrf
            @method('DELETE')

             <button class="btn btn-danger" type="submit">Eliminar</button>
    
    
        </form>

       
        
       </td>

       <td>
        <form action="{{ route('paciente.editar', $paciente->id_paciente) }}" method="GET">
            @csrf
            <button class="btn btn-primary" type="submit">Editar</button>
        </form>

        </td>



     </tr>

     @endforeach

     </tbody>


</table>

<a class="btn btn-primary" href="{{route('agregar_paciente')}}">Agregar paciente</a>
<a href="{{route('panel_administracion')}}" class="btn btn-primary btn-inicio" >Regresar</a>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>