@extends('layouts.app')

@section('content')
<div class="container">

<a href="{{ url('persona/create') }}" class="btn btn-success" >Insertar Nuevos Datos</a><br><br>

@if(Session::has('mensaje'))
{{ Session::get('mensaje' )}}
@endif
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Acciones</th>
</tr>
</thead>

<tbody>
    @foreach($personas as $persona)
    <tr>
        <td>{{ $persona->id }}</td>
        <td>{{ $persona->ApellidoP }}</td>
        <td>{{ $persona->ApellidoM }}</td>
        <td>{{ $persona->Nombre }}</td>
        <td>{{ $persona->FechaNacimiento }}</td>
        <td>{{ $persona->Sexo }}</td>
        <td>{{ $persona->Edad }}</td>
        <td>
            
        <a href="{{ url('persona/'.$persona->id.'/edit' ) }}" class="btn btn-warning">
        Actualizar
        </a>
         ǀ 
            
        
        <form action="{{ url('/persona/'.$persona->id )}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
        <input class="btn btn-danger" type="submit" onclick="return confirm('¿DESEAS BORAR?')" value="Borrar"></form>
    
    
    </td>
</tr>
@endforeach

</tbody>

</table>
</div>
@endsection