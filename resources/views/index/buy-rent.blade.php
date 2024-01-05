@extends('layouts.header-footer')
@section('content')
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="{{route('/')}}">Home</a> / Venta - Alquiler</span>
    <h2>Venta - Alquiler</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

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
<h4>Nuevas Propiedades</h4>

@foreach ($PropiedadNuevo as $pro)
  <div class="row">
    <div class="col-lg-4 col-sm-5"><img src="{{route('imagePath', ['filename' => $pro->main_image])}}" class="img-responsive img-circle" alt="properties"></div>
      <div class="col-lg-8 col-sm-7">
        <h5 ><a href="{{ route('productDetail')}}" style="color:#a94b77">{{ $pro->adress." - ".$pro->adress_number}}</a></h5>
        <p class="price">${{ $pro->price}}</p> 
      </div>
  </div>
@endforeach
{{-- <div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="{{ route('productDetail')}}" style="color:#a94b77">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="{{ route('productDetail')}}" style="color:#a94b77">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="{{ route('productDetail')}}" style="color:#a94b77">Integer sed porta quam</a></h5>
                  <p class="price">$300,000</p> </div>
              </div>
 --}}
</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: 12 of 100 </div>
  <div class="pull-right">
  <select class="form-control">
  <option>Sort by</option>
  <option>Price: Low to High</option>
  <option>Price: High to Low</option>
</select></div>

</div>
<div class="row">

    <!-- properties -->
    @foreach ($propiedades as $pro)
    <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder" style="height: 200px"><img src="{{route('imagePath', ['filename' => $pro->main_image])}}" style="width: 100%;   height: 100%;  object-fit: cover; " class="img-responsive" alt="properties">
          <div class="status sold" style="background-color:#a94b77">{{$pro->status_id == 1 ? $pro->operations->name : $pro->status->name}}</div>
        </div>
        <h4><a href="{{ route('productDetail')}}" style="color:#a94b77">{{$pro->adress}}</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="{{ route('productDetail')}}" style="background-color:#a94b77">Ver Detalle</a>
      </div>
    </div>
    @endforeach
      <!-- properties -->


      
    </div>
    <div class=" pagination-container">

      {{ $propiedades->links() }}
    </div>
</div>
</div>
</div>
</div>

@endsection