




<!doctype html>
<html lang="en">
 <head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="{{asset('css/coreui.min.css')}}" crossorigin="anonymous">
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"  >
 <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
 <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.css')}}">
 <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.rtl.css')}}">
 <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
 <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.css')}}">
 <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.css')}}">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 @routes
  <title>design company Mada</title>
 <style>
     #footer{
         margin:50px
     }

 </style>

 </head>
 <body class="c-app">
  @include('partials.slider')
  <div class="c-wrapper">
    <header class="c-header c-header-dark c-header-fixed">
    {{-- create heder her   ////////////////////////////////////////////////--}}

    </header>
    <div class="c-body">

    <main class="c-main">

    <div class="container-fluid">

    </div>

  @yield('content')



</main>
    </div >
    <footer class="c-footer" id ='footer'>
    <div><a href="https://www.facebook.com/mada.td">Mada IT</a> © 2021 creativeLabs.</div>
    <div class="mfs-auto">Powered by&nbsp;<a href="https://www.facebook.com/mada.td">Mada conmany</a></div>
    </footer>
    </div>




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://unpkg.com/@popperjs/core@2"></script>
 <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
 </body>
</html>
