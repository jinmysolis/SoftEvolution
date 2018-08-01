@extends('layout')

@section('header')
   <h1>
        Todas los usuarios
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Informacion del sistema</a></li>
        <li class="active">Post</li>
      </ol>
@stop

@section('content')

<h1>Dashboard</h1>

<h1>Informacion del sistema</h1>


<div class="container">
   <div class="row">
     <div class="col">

  
<div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="img/registro.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Registro de usurio</h5>
      <p class="card-text">Usuarios registrado podran crear nuevas entradas..</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Inicio de session de usuarios registrados.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          softEvolution <cite title="Source Title">2018</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title">Creacio de nuevos post</h5>
      <p class="card-text">CRUD, creacion, listado, actualizacion y eliminacion de nuevas entradas.</p>
      <p class="card-text"><small class="text-muted">softEvolution</small></p>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Sistema de prueba para softEvolution.</p>
      <footer class="blockquote-footer">
        <small>
          <cite title="Source Title">31/07 2018</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Relacion Uno a Uno</h5>
      <p class="card-text">Un post pertenece a una categoria.</p>
      <p class="card-text"><small class="text-muted">softEvolution</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img" src="img/logo.png" alt="Card image">
  </div>
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>Relacion uno a mucho.</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
         un post tiene varios etiquetas <cite title="Source Title">una etiqueta tienes varios post</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Listado de Usuarios</h5>
      <p class="card-text">listado de usuarios con fecha de creacion y actualizacion.</p>
      <p class="card-text"><small class="text-muted">softEvolution</small></p>
    </div>
  </div>
</div>

 

</div>
   </div>


</div>
@stop