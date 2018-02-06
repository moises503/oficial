@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cumplimiento de Cooperaciones</h2>
            </div>
            <div class="pull-right">
              <a class="btn btn-success" href="{{ route('asistenciacooperacione.create') }}"> Pasar Lista</a>
            </div>
        </div>
    </div>


    <table class="table table-bordered">
        <tr>
           
            <th>Nombre Cooperacion</th>
            <th>Fecha cooperacion</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Lugar residencia</th>
            <th>Asistencia</th>
            
            </tr>
    @foreach ($asistenciacooperaciones as $aa)
    <tr>
   
        <td>{{ $aa->cooperaciones->tipo}}</td>
        <td>{{ $aa->cooperaciones->fechacooperacion}}</td>
        <td>{{ $aa->ciudadanos->nombre}}</td>
        <td>{{ $aa->ciudadanos->fechanacimiento}}</td>
        <td>{{ $aa->ciudadanos->calledomicilio}}</td>
        <td>{{ $aa->ciudadanos->numerodomicilio}}</td>
        <td>{{ $aa->ciudadanos->residencia}}</td>
        <td>{{ $aa->asistencia}}</td>
      
   

        
    </tr>
    @endforeach

    </table> 
   
    @endsection




