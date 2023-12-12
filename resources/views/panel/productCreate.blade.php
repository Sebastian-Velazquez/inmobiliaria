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
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tipo de Propiedad</label>
                      <input type="email" name="tipoPropiedad" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Tipo de Operación</label>
                      <input type="text" name="tipoOperacón" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Calle</label>
                      <input type="text" name="adress" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Numero de calle</label>
                      <input type="number" name="adress" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Precio</label>
                      <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Dimensiones</label>
                      <input type="text" name="dimension" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de habitaciones</label>
                      <input type="numberr" name="room" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de baños</label>
                      <input type="numberr" name="bathroom" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>


                    <label for="exampleInputPassword1">Tilde las opciones que correspondan:</label>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="dining_room"> Comedor
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="yard"> Patio
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pool"> Piscina
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="garage"> Garaje
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gas"> Gas 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="expenses"> Expensas 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kitchen"> Cocina 
                      </label>
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Maps Google</label>
                      <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Los formatos compartibles son: .rpg, .jpng, .png</p>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea name="description" id="" cols="30" rows="10"  class="form-control" id="exampleInputPassword1" placeholder="Password"></textarea>
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