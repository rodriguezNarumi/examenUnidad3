
<h1>{{ $modo }} Personas</h1>

<div class="form-group">

<label for="ApellidoP">Apellido Paterno</label>
<input type="text" class="form-control" name="ApellidoP" value="{{ isset($personas->ApellidoP)?$personas->ApellidoP:'' }}" id="ApellidoP">

</div>

<div class="form-group">
<label for="ApellidoM">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoM" value="{{ isset($personas->ApellidoM)?$personas->ApellidoM: '' }}" id="ApellidoM">

</div>

<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text"  class="form-control"name="Nombre" value="{{isset($personas->Nombre)?$personas->Nombre:'' }}"  id="Nombre">

</div>

<div class="form-group">
<label for="FechaNacimiento">Fecha de Nacimiento</label>
<input type="text" class="form-control" name="FechaNacimiento" value="{{isset($personas->FechaNacimiento)?$personas->FechaNacimiento:'' }}" id="FechaNacimiento">

</div>

<div class="form-group">
<label for="Sexo">Sexo</label>
<input type="text"  class="form-control" name="Sexo" value="{{isset($personas->Sexo)?$personas->Sexo:'' }}" id="Sexo">

</div>

<div class="form-group">
<label for="Edad">Edad</label>
<input type="text"class="form-control"  name="Edad" value="{{isset($personas->Edad)?$personas->Edad:'' }}" id="Edad">

</div>


<input class="btn btn-success" type="submit"  value="{{$modo}} Datos">

<a class="btn btn-primary" href="{{ url('persona/') }}">Regresas</a>

<br>
