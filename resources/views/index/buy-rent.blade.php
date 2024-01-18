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
    <form action="" method="get">
      @csrf
      <input type="text" class="form-control" name="name" placeholder="Búsqueda de Propiedad">
      <div class="row">
              <div class="col-lg-6">
                <select class="form-control" name="optionAccion">
                  <option value="" >Todo</option>
                  @foreach ($operacion as $ope)
                    <option value="{{$ope->id}}">{{$ope->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-lg-6">
                <select class="form-control" name="optionTipo">
                  <option value="" >Todo</option>
                  @foreach ($tipoPropiedad as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="col-lg-6">
                <input type="number" class="form-control" name="minimo" id="" placeholder="Precio mín">
              </div>
              <div class="col-lg-6">
                <input type="number" class="form-control" name="maximo" id="" placeholder="Precio máx">
              </div>
              <div>Opciones:</div>
              <div class="checkbox ">
                <label>
                  <input type="checkbox" name="diningRoom" value="1"   > Comedor
                </label>
              </div>
              <div class="checkbox">
                  <label>
                    <input type="checkbox" name="yard"  value="1"  > Patio
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="pool" value="1" > Piscina
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="garage" value="1" > Garaje
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="gas" value="1"  > Gas 
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="expenses" value="1" > Expensas 
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="kitchen" value="1" > Cocina 
                  </label>
                </div>
            </div>

            <div class="row">
           
            </div>
            <button class="btn btn-primary" style="background-color:#a94b77">Buscar</button>
    </div>
  </form>


<div class="hot-properties hidden-xs">
<h4>Nuevas Propiedades</h4>

@foreach ($PropiedadNuevo as $pro)
  <div class="row">
    <div class="col-lg-4 col-sm-5"><img src="{{route('imagePath', ['filename' => $pro->main_image])}}" class="img-responsive img-circle" alt="properties"></div>
      <div class="col-lg-8 col-sm-7">
        <h5 ><a href="{{ route('productDetail',['id' => $pro->id])}}" style="color:#a94b77">{{ $pro->adress." - ".$pro->adress_number}}</a></h5>
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
        <h4><a href="{{ route('productDetail',['id' => $pro->id])}}" style="color:#a94b77">{{$pro->adress}}</a></h4>
        <p class="price">Price: $234,900</p>
        <div class="listing-detail">
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="Habitaciones">{{$pro->room_number}}</span> 
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="baño">{{$pro->bathroom_number}}</span> 
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="Cocina">{{$pro->kitchen == 0 ? "No" :"Si"}}</span> 
          <span data-toggle="tooltip" data-placement="bottom" data-original-title="Garaje">{{$pro->garage == 0 ? "No" :"Si"}}</span> 
        </div>
        <a class="btn btn-primary" href="{{ route('productDetail',['id' => $pro->id]) }}" style="background-color:#a94b77">Ver Detalle</a>
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