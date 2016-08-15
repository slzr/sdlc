@extends('layouts.base')

@section('content')


<div class="jumbotron">
  <div class="container">

    <div class="col-xs-6">
      <img src="{{ asset('images/mailbox.png')}}" alt="" class="img-responsive big-logo">
    </div>
    <div class="col-xs-6">
      <div class="page-header">
        <h1>UNEGBox</h1>
        <p>Equipo de desarrollo</p>
      </div>
    </div>

  </div>
</div>


<div class="section">
  <div class="container">
    <div class="col-sm-8">
      <p class="text-center padding-top-md"><b>UNEGBox</b> fue desarrollado por los estudiantes de Sistema de la Calidad, como proyecto final, para darle solución a la problemática vivida cada semestre dentro de la Universidad Nacional Experimental de Guayana durante cada período de inscripción. Los estudiantes ahora, en vez de dirigirse hasta la universidad a llevar su planilla de adición o queja sobre algún problema con su inscripción, lo puede hacer directamente utilizando la aplicación <b>UNEGBox</b>.</p>
    </div>
    <div class="col-sm-4 text-center ">
    <img src="{{ asset('images/web-development.png') }}" alt="">
    </div>
  </div>
</div>

<div class="container">

  <div class="col-md-12">
    <h3 class="profesor">Profesor: <span>Noel Gavarrete</span></h3>
  </div>

  <div class="col-sm-6 col-md-4">  
    <ul class="lista-estudiantes">
      <h3>Grupo 1</h3>
      <li>Laura Arias</li>
      <li>Miguel Mujic</li>
      <li>Deysi Bye</li>
      <li>Saúl Hernánde</li>
      <li>Junior Rodrigue</li>
      <li>Sandro Martine</li>
      <li>Reinaldo Gonzále</li>
    </ul>
  </div>

  <div class="col-sm-6 col-md-4">  
    <ul class="lista-estudiantes">
      <h3>Grupo 2</h3>
      <li>Ruben Madrid</li>
      <li>Daniel Garrido</li>
    </ul>
  </div>

  <div class="clearfix visible-sm-block"></div>

  <div class="col-sm-6 col-md-4">  
    <ul class="lista-estudiantes">
      <h3>Grupo 3</h3>
      <li>Luisana Sandoval</li>
      <li>Fátima Rodríguez</li>
      <li>José Zorrilla</li>
      <li>Cruz Pigas</li>
      <li>Ulises Tovar</li>
      <li>Fabiola Velázquez</li>
      <li>Alexis Maita </li>
      <li>Jahiezer Indriago</li>
    </ul>
  </div>

  <div class="clearfix visible-md-block"></div>

  <div class="col-sm-6 col-md-4">  
    <ul class="lista-estudiantes">
      <h3>Grupo 4</h3> 
      <li>Fercys Ramirez</li>
      <li>Natasha Méndez</li>
      <li>José Salazar</li>
      <li>Jhonger Delgado</li>
      <li>Daniela Ruiz</li>
      <li>Piero Pinzón</li>
    </ul>
  </div>

  <div class="clearfix visible-sm-block"></div>

  <div class="col-sm-6 col-md-4">  
    <ul class="lista-estudiantes">
      <h3>Grupo 5</h3>
      <li>Karla García</li>
      <li>Gabriela Bermudez</li>
      <li>Utai Silva</li>
      <li>Sergio Molea</li>
      <li>Javier Olivero</li>
      <li>Xavier Noguera</li>
      <li>Lauris Blanca</li>
    </ul>
  </div>

  <div class="col-sm-6 col-md-4">  
    <ul class="lista-estudiantes">
      <h3>Grupo 6</h3>
      <li>Deisyuris Guzmán</li>
      <li>Salomón Guevara</li>
      <li>Luis Guipe</li>
      <li>Migdalis Lepage</li>
    </ul>
  </div>
</div>

@stop
