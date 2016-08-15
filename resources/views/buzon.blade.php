@extends('layouts.base')

@section('content')


<div class="jumbotron">
  <div class="container text-center">
    <div class="page-header">
      <h1>Buzon</h1>
      <p>Puedes decirnos todos los comentarios y sugerencias que tengas, nuestra mision es mejorar cada dia como casa de estudio.</p>
    </div>
  </div>
</div>

@if (session('message'))
  <div class="container">
    <div class="alert alert-dismissible alert-success text-center">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      {!! session('message') !!}
    </div>
    </div>
  </div>
@endif

<div class="container">
    {!!Form::open(['route'=> 'buzon', 'method'=>'POST', 'class'=> '']) !!}
    
    <div class="col-md-6">
      <div class="form-group">
        {!!Form::text('nombre', null, [
          'class'       => 'form-control',
          'placeholder' => 'Inserta tu nombre completo',
          'required'
          ])!!}
        </div>
    </div>     

    <div class="col-md-6">
      <div class="form-group">
        {!!Form::email('correo', null, [
          'class'       => 'form-control',
          'placeholder' => 'Inserte tu correo',
          'required'
          ])!!}
        </div>
    </div>    

    <div class="col-md-12">
      <div class="form-group">
        {!!Form::text('topico', null, [
          'class'       => 'form-control',
          'placeholder' => 'Especifica un topico o tema. Ej: Comedor, Transporte',
          'required'
          ])!!}
        </div>
    </div>  

    <div class="col-md-12">
      <div class="form-group">
        {!!Form::textarea('comentario', null, [
          'class'       => 'form-control',
          'placeholder' => 'Inserte tu Comentario/Sugerencia',
          'required'
          ])!!}
        </div>
    </div>    

    <div class="col-md-12 text-center">
      {!!Form::submit('Enviar', ['class' => 'btn btn-success'])!!}
    </div>

  {!!Form::close() !!}
</div>

@stop
