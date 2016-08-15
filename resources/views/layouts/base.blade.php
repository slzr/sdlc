<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ $title }}</title>
  <meta name="description" content="{{ $desc }}">

  @yield('pre-styles')
  @section('styles')
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    {!! Html::style( asset('css/vendor.min.css') ) !!}
    {!! Html::style( asset('css/main.css') ) !!}
  @show
  @yield('post-styles')

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>  

  @yield('pre-header')
  @include('layouts.header')

  <main id="content" class="bg-body">
    <div class="has-header"></div>

    @section('content')
      <p>CONTENIDO</p>
    @show
    <div class='close-area' id="close-area-menu"></div>
  </main>

  @include('layouts.footer')
  @yield('post-footer')

  @yield('pre-scripts')
  @section('scripts')
    {!! Html::script( asset('js/vendor.min.js') ) !!}
    {!! Html::script( asset('js/main.js') ) !!}
  @show
  @yield('post-scripts')

</body>
</html>