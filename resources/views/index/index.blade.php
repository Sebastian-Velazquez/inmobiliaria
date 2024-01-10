@extends('layouts.header-footer')
{{-- @foreach ($propiedadDestacado as $propiedad)
<p>{{$propiedad->typeProperty->name}}</p>
@endforeach --}}

@section('content')

<div class="">
            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Inmobiliaria Flores</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Alberdi 2355, Villa Gobernador Galvaz</p>
              <p>Somos una empresa familiar con mas de 20 años de trayectoria, brindando la mejor experienza de gestión. </p>
              {{-- <cite>$ 20,000,000</cite> --}}
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Inmobiliaria Flores</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Alberdi 2355, Villa Gobernador Galvaz</p>
              <p>Somos una empresa familiar con mas de 20 años de trayectoria, brindando la mejor experienza de gestión.</p>
              {{-- <cite>$ 20,000,000</cite> --}}
              </blockquote>
            </div>
          </div>
          
          {{-- <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">Apartamento de 2 Dormitorios y 1 Comedor en Venta</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Alberdi 2355, Villa Gobernador Galvaz</p>
              <p>Somos una empresa familiar con mas de 20 años de trayectoria, brindando la mejor experienza de gestión.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">Apartamento de 2 Dormitorios y 1 Comedor en Venta</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Alberdi 2355, Villa Gobernador Galvaz</p>
              <p>Somos una empresa familiar con mas de 20 años de trayectoria, brindando la mejor experienza de gestión.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div>
          
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">Apartamento de 2 Dormitorios y 1 Comedor en Venta</a></h2>
              <blockquote>              
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Alberdi 2355, Villa Gobernador Galvaz</p>
              <p>Somos una empresa familiar con mas de 20 años de trayectoria, brindando la mejor experienza de gestión.</p>
              <cite>$ 20,000,000</cite>
              </blockquote>
            </div>
          </div> --}}
        </div><!-- /sl-slider -->



        {{-- <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav> --}}

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Compra, Venta y Alquiler</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Búsqueda de Propiedad">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <option>Comprar</option>
                <option>Alquilar</option>
                <option>Vender</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Precio</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - Mas</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Casa</option>
                <option>Departamento</option>
                <option>Galpón</option>
                <option>Local</option>
                <option>Terreno</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='{{ route('buy') }}'" style="background-color:#a94b77">Buscar</button>
              </div>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">

        @guest
        <p>Sesión Administrativo</p>
        <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Iniciar Sesión</button></div>
        @else
        <p></p>
        </div>
        @endguest
          
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer" > <a href="{{ route('buy') }}" class="pull-right viewall" style="color:#a94b77">Ver todo el listado</a>
    <h2>Propiedades Destacadas</h2>
    <div id="owl-example" class="owl-carousel">
      @foreach ($propiedadDestacado as $pro)
      <div class="properties">
        <div class="image-holder" style="height: 200px"><img src="{{route('imagePath', ['filename' => $pro->main_image])}}" style="width: 100%;   height: 100%;  object-fit: cover; "  class="img-responsive" alt="properties"/>
          <div class="status sold" style="background-color:#a94b77">{{$pro->status_id == 1 ? $pro->operations->name : $pro->status->name}}</div>
        </div>
        <h4><a href="{{ route('productDetail',['id' => $pro->id])}}" style="color:#a94b77">{{$pro->adress.' '.$pro->adress_number.' ('.$pro->cities->name.')'}}</a></h4>
        <p class="price">${{$pro->price}}</p>
        <div class="listing-detail">
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="Habitaciones">{{$pro->room_number}}</span> 
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="baño">{{$pro->bathroom_number}}</span> 
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocina">{{$pro->kitchen == 0 ? "No" :"Si"}}</span> 
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="Garaje">{{$pro->garage == 0 ? "No" :"Si"}}</span> 
        </div>
        <a class="btn btn-primary" href="{{ route('productDetail',['id' => $pro->id])}}" style="background-color:#a94b77">Ver Detalle</a>
      </div>
      @endforeach
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>Sobre nosotros</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="{{ route('about')}}" style="color:#a94b77">Saber Mas</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Propiedades nuevas</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                <div class="col-lg-4" style="height: 150px;"><img src="{{route('imagePath', ['filename' => $PropiedadNuevo[0]->main_image])}}" style="width: 100%;   height: 100%;  object-fit: cover; " class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="{{ route('productDetail',['id' => $PropiedadNuevo[0]->id])}}"  style="color:#a94b77">{{ $PropiedadNuevo[0]->adress."  ".$PropiedadNuevo[0]->adress_number.' ('.$PropiedadNuevo[0]->cities->name.')'}}</a></h5>
                  <p class="price">${{ $PropiedadNuevo[0]->price}} </p>
                  <a href="{{ route('productDetail',['id' => $PropiedadNuevo[0]->id])}}" class="more">Mas Detalles</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4" style="height: 150px"><img src="{{route('imagePath', ['filename' => $PropiedadNuevo[1]->main_image])}}" style="width: 100%;   height: 100%;  object-fit: cover; " class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="{{ route('productDetail',['id' => $PropiedadNuevo[1]->id])}}"  style="color:#a94b77">{{ $PropiedadNuevo[1]->adress."  ".$PropiedadNuevo[1]->adress_number.' ('.$PropiedadNuevo[1]->cities->name.')'}}</a></h5>
                  <p class="price">${{ $PropiedadNuevo[1]->price}}</p>
                  <a href="{{ route('productDetail',['id' => $PropiedadNuevo[1]->id])}}" class="more">Mas Detalles</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-lg-4" style="height: 150px"><img src="{{route('imagePath', ['filename' => $PropiedadNuevo[2]->main_image])}} " style="width: 100%;   height: 100%;  object-fit: cover; " class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="{{ route('productDetail',['id' => $PropiedadNuevo[2]->id])}}"  style="color:#a94b77">{{ $PropiedadNuevo[2]->adress."  ".$PropiedadNuevo[2]->adress_number.' ('.$PropiedadNuevo[2]->cities->name.')'}}</a></h5>
                  <p class="price">${{ $PropiedadNuevo[2]->price}}</p>
                  <a href="{{ route('productDetail',['id' => $PropiedadNuevo[2]->id])}}" class="more">Mas Detalles</a> </div>
              </div>
            </div>
            <div class="item">  
              <div class="row">
                <div class="col-lg-4" style="height: 150px"><img src="{{route('imagePath', ['filename' => $PropiedadNuevo[3]->main_image])}}"  style="width: 100%;   height: 100%;  object-fit: cover; " class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="{{ route('productDetail',['id' => $PropiedadNuevo[3]->id])}}"  style="color:#a94b77">{{ $PropiedadNuevo[3]->adress."  ".$PropiedadNuevo[3]->adress_number.' ('.$PropiedadNuevo[3]->cities->name.')'}}</a></h5>
                  <p class="price">${{ $PropiedadNuevo[3]->price}}</p>
                  <a href="{{ route('productDetail',['id' => $PropiedadNuevo[3]->id])}}" class="more">Mas Detalles</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

