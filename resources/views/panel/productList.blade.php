@extends('layouts.layouts-panel')
@section('content')
      <!-- =============================================== -->
      <body class="skin-blue">
        <div class="wrapper">
          <!-- Right side column. Contains the navbar and content of the page -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                Gestión
                <small>Administrar las publicaciones</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="{{route('panel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Gestión de Propiedades</a></li>
              </ol>
            </section>
    
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Gestión de Propiedades</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Propiedad</th>
                            <th>Tipo</th>
                            <th>Operación</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Destacado</th>
                            <th>Estado</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($property as $pro)
                          <tr>
                            <td>{{$pro->adress}} - {{$pro->adress_number}}</td>
                            <td>{{$pro->type_properties->name}}</td>
                            <td>{{$pro->operations->name}}</td>
                            <td>
                              <form method="GET" action="{{ route('viewEdit') }}">
                                <input type="hidden" name="id" value="{{$pro->id}}">
                                <button type="submit" class="btn-sm btn-primary">ir</button>
                            </form>
                            </td>
                            <td>
                              <a href="#"><button type="button" class="btn-sm btn-danger">Eliminar</button></a>
                            </td>
                            <td><input type="checkbox" name="" id="" {{$pro->stand_out == 1 ? 'checked' : ''}}></td>
                            <td>
                              <select name="" id="" class="btn-sm btn-primary">
                                <option value="{{$status[0]->id}}"{{$pro->stand_out == 1 ? 'selected' : ''}}>{{$status[0]->name}}</option>
                                <option value="{{$status[1]->id}}"{{$pro->stand_out == 1 ? 'selected' : ''}}>{{$status[1]->name}}</option>
                              </select>
                            </td>
                          </tr>
                          @endforeach                          
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Propiedad</th>
                            <th>Tipod</th>
                            <th>Operación</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            <th>Destacado</th>
                            <th>Estado</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </section><!-- /.content -->
          </div><!-- /.content-wrapper -->
        </div><!-- ./wrapper -->

    
      </body>
      <!-- =============================================== -->
      @endsection
