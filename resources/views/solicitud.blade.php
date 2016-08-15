@extends('layouts.base')

@section('content')


<div class="jumbotron">
  <div class="container text-center">
    <div class="page-header">
      <h1>Solicitud</h1>
      <p>Si tienes problemas con alguna de tus materias, ya sea por que no pudiste inscribirla o te gustaria cambiarla, llena el siguiente formulario.</p>
    </div>
  </div>
</div>

<div class="container">
  @if (session('message'))
    <div class="alert alert-dismissible alert-success text-center">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      {!! session('message') !!}
    </div>
  @endif
  
    {!!Form::open(['route'=> 'solicitud', 'method'=>'POST', 'class'=> '', 'files' => true]) !!}
    
    <div class="col-sm-4">
      <div class="form-group">
        {!!Form::text('ci', null, [
          'class' => 'form-control',
          'placeholder' => 'Cedula de identidad',
          'required'
          ])!!}
      </div>
    </div>    

    <div class="col-sm-4">
      <div class="form-group">
        {!!Form::text('lapso', null, [
          'class' => 'form-control',
          'placeholder' => 'Lapso Academico',
          'required'
          ])!!}
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        {!!Form::text('lapso', null, [
          'class'       => 'form-control',
          'placeholder' => 'Proyecto de Carrera y Sede',
          'required'
          ])!!}
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-sm-6">
      <div class="form-group">
        {!!Form::text('nombre', null, [
          'class'       => 'form-control',
          'placeholder' => 'Nombre y Apellido',
          'required'
          ])!!}
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group">
        {!!Form::text('correo', null, [
          'class'       => 'form-control',
          'placeholder' => 'Correo',
          'required'
          ])!!}
      </div>
    </div>

    <div class="clearfix"></div>
    <hr>

    <div class="col-sm-3">
      <div class="form-group">
        {!! Form::select('tipo', 
          ['A' => 'Adicion', 'C' => 'Cambio'], 'A',
          ['class'       => 'form-control', 'required']
        ) !!}
      </div>
    </div>

    <div class="col-sm-3">
      <div class="form-group">
        {!!Form::text('cod-asignatura', null, [
          'class'       => 'form-control',
          'placeholder' => 'Codigo de asignatura',
          'required'
          ])!!}
      </div>
    </div>

    <div class="col-sm-3">
      <div class="form-group">
        {!!Form::text('asignatura', null, [
          'class'       => 'form-control',
          'placeholder' => 'Nombre de asignatura',
          'required'
          ])!!}
      </div>
    </div>

    <div class="col-sm-3">
      <div class="col-xs-6">  
        <div class="form-group">
          {!!Form::text('asignatura', null, [
            'class'       => 'form-control',
            'placeholder' => 'De',
            'required'
            ])!!}
          </div>
      </div>

      <div class="col-xs-6">  
        <div class="form-group">
          {!!Form::text('asignatura', null, [
            'class'       => 'form-control',
            'placeholder' => 'A'
            ])!!}
          </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-sm-12">
      <div class="form-group">
        {!! Form::label('capture', 'Capture de pantalla') !!}
        <input name="capture" type="file" id="capture" class="form-control" accept=".jpg, .png">
        <p class="help-block">Puedes subir una imagen respaldando que tuviste algun problema en el sistema.</p>
      </div>
    </div>

    <div class="clearfix"></div>


    <div class="alert alert-dismissible alert-info text-center">
      La decision tomada por la <b>coordinacion</b> sobre tu peticion sera enviada a tu correo.
    </div>

    <div class="col-md-12 text-center">
      {!!Form::submit('Enviar', ['class' => 'btn btn-success'])!!}
      <a href="{{ asset('files/planilla-adicion.pdf') }}" target="_blank" class="btn btn-primary">Descargar planilla <i class="glyphicon glyphicon-cloud-download"></i></a>
    </div>
  {!!Form::close() !!}
</div>

@stop
