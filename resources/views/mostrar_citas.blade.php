<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="/css/mostrar.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Mostrar citas</title>
</head>
<body class="mostrar_medico">

<section class="mostrar_pacientes">



   <h3 class="text-light">Citas</h3>
    
<table  class="table table-dark table-striped-columns" >

<thead>
        <tr>
          
            <th>Id paciente</th>
            <th>Nombre</th>
            <th>Médico</th>
            <th>Fecha y hora</th>
            <th>Comentarios</th>
            <th>Acción</th>
          
        
           
        </tr>


      
    </thead>

    <tbody>

      @foreach ($citas as $cita)


      <tr>

        <td>{{$cita->id_paciente}}</td>
        <td>{{$cita->nombre_paciente}}</td>
        <td>{{$cita->nombre_medico}}</td>
        <td>{{$cita->fecha_cita}}</td>
        <td>{{$cita->comentarios}}</td>
   

        <td>
            
        <form action="{{route('citas.eliminar',$cita->id_cita )}}" method="POST">
             @csrf
             @method('DELETE')
 
              <button class="btn btn-danger" type="submit">Eliminar</button>
     
     
         </form>
        </td>


     </tr>

     @endforeach

     </tbody>


</table>

<a class="btn btn-primary" href="{{route ('pacientes.hacer_cita')}}">Realizar cita</a>
<a href="{{route('panel_administracion')}}" class="btn btn-primary btn-inicio" >Regresar</a>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>