@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/personas/'.$personas->id )}}" method="post">
    @csrf
    {{ method_field('PATCH')}}
@include('Personas.form', ['modo'=>'Actualizar']);

</form>
</div>
@endsection