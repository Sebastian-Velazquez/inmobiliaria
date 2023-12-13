@extends('layouts.layouts-panel')
@section('content')
      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            General Form Elements
            <small>Preview</small>
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
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('processCreate')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tipo de Propiedad</label>
                      <select  name="tipoPropiedad"   class="form-control" id="exampleInputEmail1">
                        <option value="">Seleccionar</option>
                        <option value="1">1</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tipo de Operación</label>
                      <select  name="tipoOperacón"   class="form-control" id="exampleInputEmail1">
                        <option value="">Seleccionar</option>
                        <option value="1">1</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Calle</label>
                      <input type="text" name="adress" class="form-control" id="exampleInputPassword1" placeholder="Ej: Alberdi">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Numero de calle</label>
                      <input type="number" name="adressNumber" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2255">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Precio</label>
                      <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Ej: 50200">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Dimensiones</label>
                      <input type="text" name="dimension" class="form-control" id="exampleInputPassword1" placeholder="Ej: 10x40">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de habitaciones</label>
                      <input type="numberr" name="room" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de baños</label>
                      <input type="numberr" name="bathroom" class="form-control" id="exampleInputPassword1" placeholder="Ej: 1">
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
                    <input type="file" name="image[]" id="exampleInputFile" multiple accept="image/*">
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