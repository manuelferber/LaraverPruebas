@extends('master')




@section('formulario')



<h2>Formulario </h2>
<div class="container" > 

<form action="{{url('/formulario')}}" method="post"  >
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombres" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cédula</label>
    <input type="text" class="form-control" name="cédula" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="mail" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">teléfono</label>
    <input type="text" class="form-control" name="teléfono" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection