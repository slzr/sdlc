@extends('layouts.base')

@section('content')


<div class="jumbotron">
  <div class="container text-center">
    <div class="page-header">
      <h1>Inicio de Sesion</h1>
      <p>Si formas parte de Coordinacion puedes loguearte y revisar todas los comentarios y solicitudes enviadas por los estudiantes.</p>
    </div>
  </div>
</div>

<div class="container">
  @if (session('error'))
    <div class="container">
      <div class="alert alert-dismissible alert-danger text-center">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {!! session('error') !!}
      </div>
      </div>
    </div>
  @endif

    {!!Form::open(['route'=> 'user.auth', 'method'=>'POST', 'class'=> 'login']) !!}
    
    <div class="col-md-12">
      <div class="form-group">
        {!!Form::email('email', null, [
          'class'       => 'form-control',
          'placeholder' => 'Inserte correo',
          'required'
          ])!!}
        </div>
    </div>     

    <div class="col-md-12">
      <div class="form-group">
      {!! Form::password('password', array(
        'class'       => 'form-control',
        'placeholder' => 'Inserte tu contraseña',
        'required'
      )) !!}
      </div>
    </div>    

    <div class="col-md-12 text-center">
      {!!Form::submit('Enviar', ['class' => 'btn btn-success btn-block'])!!}
    </div>

  {!!Form::close() !!}
</div>

@stop
