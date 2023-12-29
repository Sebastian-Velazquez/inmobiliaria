@extends('layouts.layouts-panel')
@section('content')
<!-- SweetAlert2 CSS y JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                <li><a href="#">Gestión de Propiedades Eliminados</a></li>
              </ol>
            </section>
    
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Gestión de Propiedades Eliminados</h3>
                      {{-- Mensaje  --}}
        @if (session('message'))
        <h4 class="alert alert-succes" style="color:rgb(0, 255, 136)" role="alert">
          <strong>{{ session('message') }}</strong>
        </h4>
      @endif
      @if (session('message-delete'))
        <h4 class="alert alert-succes" style="color:rgb(127, 11, 9)" role="alert">
          <strong>{{ session('message-delete') }}</strong>
        </h4>
      @endif
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Fecha</th>
                            <th>Propiedad</th>
                            <th>Tipo</th>
                            <th>Operación</th>
                            <th>Recuperar</th>
                            <th>Destruir</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($property as $pro)
                          <tr>
                            <td>{{$pro->updated_at}}</td>
                            <td>{{$pro->adress}} - {{$pro->adress_number}}</td>
                            <td>{{$pro->type_properties->name}}</td>
                            <td>{{$pro->operations->name}}</td>
                     
                            <td>
                              <form method="get" action="{{route('formRestores')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$pro->id}}">
                                <input type="submit" class="btn-sm btn-success" value="Recuperar">
                              </form>
                            </td>
                            <td>
                              <form method="post" action="{{route('processDestroy')}}" id="deleteForm{{$pro->id}}">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{$pro->id}}">
                                <button type="button" class="btn-sm btn-danger" onclick="confirmDelete('deleteForm{{$pro->id}}')">Destruir</button>
                              </form>

                            </td>
                          </tr>
                          @endforeach                          
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Fecha</th>
                            <th>Propiedad</th>
                            <th>Tipo</th>
                            <th>Operación</th>
                            <th>Recuperar</th>
                            <th>Eliminar</th>
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
<!-- Script para mostrar SweetAlert2 en lugar del formulario de eliminación directamente -->
<script>
  function confirmDelete(formId) {
  Swal.fire({
    title: '¿Estás seguro?',
    text: 'Esta acción no se puede deshacer.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    confirmButtonText: 'Sí, eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario confirma, envía el formulario
      $('#' + formId).submit();
    }
  });
  }
</script>
    
      </body>
      <!-- =============================================== -->
      @endsection
