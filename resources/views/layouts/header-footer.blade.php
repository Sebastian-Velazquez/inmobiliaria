<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Inmobiliaria Flores</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
 	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{asset('assets/script.js')}}"></script>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

<!-- Owl stylesheet -->
<link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/owl-carousel/owl.theme.css')}}">
<script src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slitslider/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slitslider/css/custom.css')}}" />
    <script type="text/javascript" src="{{asset('assets/slitslider/js/modernizr.custom.79639.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/slitslider/js/jquery.ba-cond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/slitslider/js/jquery.slitslider.js')}}"></script>
<!-- slitslider -->

</head>

<body>
<!-- Header Starts -->
<div class="navbar-wrapper" >
  
        <div class="navbar-inverse" role="navigation" style="background-color: 	#a94b77">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="{{ route('/') }}" style="color: 	#ffffff">Inicio</a></li>
                <li><a href="{{ route('about') }}" style="color: 	#ffffff">Acerca de nosotros</a></li>
                <li><a href="{{ route('agents') }}" style="color: 	#ffffff">Agentes</a></li>         
                {{-- <li><a href="{{ route('blog') }}" style="color: 	#ffffff">Blog</a></li> --}}
                <li><a href="{{ route('contact') }}" style="color: 	#ffffff">Contacto</a></li>

                @guest
                @else
                  <li><a href="{{ route('panel') }}">Panel de Control</a></li>
                  <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __('Cerrar sesión') }}
                    </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                  </li>
                @endguest
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="{{ route('/') }}"><img src="{{asset('images/logo.jpg')}}" style="width: 300px" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="{{ route('buy') }}" >Venta / Alquiler</a></li>
                <li><a href="{{ route('sale') }}">¿quieres poner tu propiedad en administración? </a></li>         
              </ul>
</div>
<!-- #Header Starts -->
</div>


<main class="py-4">
  @yield('content')
</main>





<div class="footer">

  <div class="container">
  <div class="row">
              <div class="col-lg-3 col-sm-3">
                     <h4 style="color: 	#a94b77">Información</h4>
                     <ul class="row">
                  <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('about') }}" >Acerca de nosotros</a></li>
                  <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('agents') }}">Agentes</a></li>         
                  {{-- <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('blog') }}">Blog</a></li> --}}
                  <li class="col-lg-12 col-sm-12 col-xs-3"><a href="{{ route('contact') }}">Contacto</a></li>
                </ul>
              </div>
              
              <div class="col-lg-3 col-sm-3">
                      <h4 style="color:#a94b77">Notificaciones</h4>
                      <p>Reciba notificaciones sobre las últimas propiedades en nuestro mercado.</p>
                      <form class="form-inline" role="form">
                              <input type="text" placeholder="Ingrese su email" class="form-control">
                                  <button class="btn btn-success" type="button" style="background-color: 	#a94b77">¡Notificarme!</button></form>
              </div>
              
              <div class="col-lg-3 col-sm-3">
                      <h4 style="color: 	#a94b77">Seguinos en nuestras redes</h4>
                      <a href="#"><img src="{{asset('images/facebook.png')}}" alt="facebook"></a>
                      <a href="#"><img src="{{asset('images/twitter.png')}}" alt="twitter"></a>
                      <a href="#"><img src="{{asset('images/linkedin.png')}}" alt="linkedin"></a>
                      <a href="#"><img src="{{asset('images/instagram.png')}}" alt="instagram"></a>
              </div>
  
               <div class="col-lg-3 col-sm-3">
                      <h4 style="color: 	#a94b77">Contacto</h4>
                      <p><b>Inmobiliaria Flores</b><br>
  <span class="glyphicon glyphicon-map-marker"></span> Julio a Roca 000, Villa Gobernador Galvez <br>
  <span class="glyphicon glyphicon-envelope"></span> inmobiliariafloresvgg@gmail.com<br>
  <span class="glyphicon glyphicon-earphone"></span> (341) 999-9999</p>
              </div>
          </div>
  <p class="copyright" style="color: 	#a94b77">Copyright 2023. Todos los derechos reservados.	</p>
  
  
  </div></div>
  
  
  
  
  <!-- Modal -->
  <div id="loginpop" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="row">
          <div class="col-sm-10 login">
          <h4>Iniciar Sesión</h4>
            <form class="" role="form" method="POST" action="{{ route('login') }}">
              @csrf
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Ingresar Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail2" placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword2">Password</label>
            <input id="exampleInputPassword2" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="checkbox">
            <label>
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
            </label>
          </div>
          <button type="submit" class="btn btn-success">Iniciar</button>
        </form>          
          </div>

  
        </div>
      </div>
    </div>
  </div>
  <!-- /.modal -->
  
  
  
  </body>
  </html>
  
  
  
  