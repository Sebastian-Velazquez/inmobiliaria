@extends('layouts.header-footer')

@section('content')
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="{{route('/')}}">Home</a> / Detalle</span>
    <h2>{{ $propiedad->adress." ".$propiedad->adress_number." (".$propiedad->cities->name.")"}}</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">
  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Buscar Propiedad</h4>
    <input type="text" class="form-control" placeholder="Search of Properties">
    <div class="row">
            <div class="col-lg-5">
              <select class="form-control">
                <option>Comprar</option>
                <option>Alquilar</option>
                <option>Vender</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Precio</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
                <option>Casa</option>
                <option>Departamento</option>
                <option>Galpón</option>
                <option>Local</option>
                <option>Terreno</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary" style="background-color:#a94b77">Buscar</button>
  </div>
<div class="hot-properties hidden-xs">
  <h4>Propiedades similares</h4>
  @foreach ($PropiedadSimilar as $pro)
  <div class="row">
    <div class="col-lg-4 col-sm-5"><img src="{{route('imagePath', ['filename' => $pro->main_image])}}" class="img-responsive img-circle" alt="properties"></div>
      <div class="col-lg-8 col-sm-7">
        <h5 ><a href="{{ route('productDetail',['id' => $pro->id])}}" style="color:#a94b77">{{ $pro->adress." - ".$pro->adress_number}}</a></h5>
        <p class="price">${{ $pro->price}}</p> 
      </div>
  </div>
@endforeach
  
</div>





</div>

<div class="col-lg-9 col-sm-8 ">

<h2>{{$propiedad->type_properties->name}} en {{$propiedad->operations->name}}</h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        @foreach ($imagen as $key => $img)
          <li data-target="#myCarousel" data-slide-to="{{$key+1}}" class=""></li>
        @endforeach
        {{-- <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li> --}}
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active" style="height: 400px">
          <img src="{{route('imagePath',['filename' =>$propiedad->main_image])}}" class="properties" alt="properties" style="width: 100%;   height: 100%;  object-fit: contain; "/>
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        @foreach ($imagen as $img)
        <div class="item" style="height: 400px">
          <img src="{{route('imagePath',['filename' =>$img->image_path])}}" class="properties" alt="properties" style="width: 100%;   height: 100%;  object-fit: contain; "/>
        </div>
        @endforeach
        <!-- #Item 2 -->

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

</div>
  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Detalle de propiedades</h4>
    <p>{{$propiedad->description}}</p>
    <p><strong>Estado: </strong>{{$propiedad->status->name}}</p>
    @if($propiedad->dimension != "")<p><strong>Dimencion: </strong>{{$propiedad->dimension}}</p> @endif
    
  </div>
  <div>
      <h4><span class="glyphicon glyphicon-map-marker"></span> Ubicación</h4>
      <div class="well" style="overflow: hidden;">
          {!! $propiedad->maps ? $propiedad->maps : "No disponible" !!}
    </div>
</div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">$ {{$propiedad->price}}</p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span> {{$propiedad->adress." ".$propiedad->adress_number." (".$propiedad->cities->name.")"}}</p>
  <h6><span class="glyphicon glyphicon-home"></span> Disponibilidad</h6>
      <h6><strong>Habitaciones: </strong>{{$propiedad->room_number ? $propiedad->room_number :  "No"}}</h6>
      <h6><strong>Comedor: </strong>{{$propiedad->bathroom_number ? $propiedad->bathroom_number :  "No"}}</h6>
      <h6><strong>Baños: </strong>{{$propiedad->dining_room ? "Si" :  "No"}}</h6>
      <h6><strong>Patio: </strong>{{$propiedad->yard ? "Si" :  "No"}}</h6>
      <h6><strong>Pileta: </strong>{{$propiedad->pool ? "Si" :  "No"}}</h6>
      <h6><strong>Garaje: </strong>{{$propiedad->garagegas ? "Si" :  "No"}}</h6>
      <h6><strong>Gas: </strong>{{$propiedad->gas ? "Si" :  "No"}}</h6>
      <h6><strong>Expensas: </strong>{{$propiedad->expenses ? "Si" :  "No"}}</h6>
      <h6><strong>Cocina: </strong>{{$propiedad->kitchen ? "Si" :  "No"}}</h6>
  <div class="profile">
  <span class="glyphicon glyphicon-user">
    </span> Contactanos
    <a href="{{$whatsappLink}}" target="_blank" class="btn btn-success">Consultar por WhatsApp</a>
    <!-- Botones de WhatsApp para editar información -->
    
      

  </div>
</div>



</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  @if (session('message'))
    <h4 class="alert alert-succes" style="color:rgb(0, 255, 136)" role="alert">
      <strong>{{ session('message') }}</strong>
    </h4>
  @endif
  <h6><span class="glyphicon glyphicon-envelope"></span>Manda tu consulta</h6>
  <form action="{{route('message')}}" role="form" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$propiedad->id}}">
      <input type="text" name="name" class="form-control" placeholder="Nombre completo" value="{{ old('name') ? old('name') : '' }}"/>
      {{-- Mensaje de error --}}
        @error('name')
        <span class="alert alert-succes" style="color:red" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      <input type="text" name="email" class="form-control" placeholder="nombre@email.com" value="{{ old('email') ? old('email') : '' }}"/>
      {{-- Mensaje de error --}}
        @error('email')
        <span class="alert alert-succes" style="color:red" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      <input type="text" name="phone" class="form-control" placeholder="Numero. Ej: 341222222" value="{{ old('phone') ? old('phone') : '' }}"/>
      <textarea rows="6" name="question" class="form-control" placeholder="Cuál es tu consulta?">{{ old('question') ? old('question') : '' }}</textarea>
        {{-- Mensaje de error --}}
        @error('question')
        <span class="alert alert-succes" style="color:red" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      <button type="submit" class="btn btn-primary" name="Submit">Enviar mensaje</button>
  </form>
</div>         
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection