@extends('layouts.layouts-panel')
@section('content')
      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Formulario
            <small>NUEVO</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Completar</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('processCreate')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tipo de Propiedad</label>
                      <select  name="tipoPropiedad"   class="form-control" id="exampleInputEmail1">
                        <option value="">Seleccionar</option>
                        @foreach ($property as $pro)
                        <option value="{{ $pro}}">{{ $pro}}</option>
                        @endforeach
                      </select>
                      {{-- Mensaje de error --}}
                      @error('tipoPropiedad')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tipo de Operación</label>
                      <select  name="tipoOperacion"   class="form-control" id="exampleInputEmail1">
                        <option value="">Seleccionar</option>
                        @foreach ($operation as $ope)
                        <option value="{{ $ope}}">{{ $ope}}</option>
                        @endforeach
                      </select>
                      {{-- Mensaje de error --}}
                      @error('tipoOperacion')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Calle</label>
                      <input type="text" name="adress" class="form-control" id="exampleInputPassword1" placeholder="Ej: Alberdi">
                      {{-- Mensaje de error --}}
                      @error('adress')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Numero de calle</label>
                      <input type="number" name="adressNumber" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2255">
                      {{-- Mensaje de error --}}
                      @error('adressNumber')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Precio</label>
                      <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Ej: 50200">
                      {{-- Mensaje de error --}}
                      @error('price')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Dimensiones</label>
                      <input type="text" name="dimension" class="form-control" id="exampleInputPassword1" placeholder="Ej: 10x40">
                      {{-- Mensaje de error --}}
                      @error('dimension')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de habitaciones</label>
                      <input type="number" name="room" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2">
                      {{-- Mensaje de error --}}
                        @error('room')
                          <span class="alert alert-succes" style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de baños</label>
                      <input type="number" name="bathroom" class="form-control" id="exampleInputPassword1" placeholder="Ej: 1">
                      {{-- Mensaje de error --}}
                      @error('bathroom')
                      <span class="alert alert-succes" style="color:red" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>
                    
                    <label for="exampleInputPassword1">Tilde las opciones que correspondan:</label>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="diningRoom" value="1"> Comedor
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="yard"  value="1"> Patio
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pool" value="1"> Piscina
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="garage" value="1"> Garaje
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gas" value="1"> Gas 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="expenses" value="1"> Expensas 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kitchen" value="1"> Cocina 
                      </label>
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Maps Google</label>
                      <input type="text" name="maps" class="form-control" id="exampleInputPassword1" placeholder="<iframe> ... </iframe>">
                    </div>
                  </div><!-- /.box-body -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea name="description" id="" cols="30" rows="10"  class="form-control" id="exampleInputPassword1" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="image[]" id="exampleInputFile" multiple {{-- accept="image/*" --}}>
                    {{-- Mensaje de eror --}}
                    @error('image')
                    <span class="alert alert-succes" style="color:red" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    {{-- Mensaje de eror --}}
                    @error('image.*')
                    <span class="alert alert-succes" style="color:red" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <p class="help-block">Los formatos compartibles son: .rpg, .jpng, .png</p>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->


          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      @endsection