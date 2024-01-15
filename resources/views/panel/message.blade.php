@extends('layouts.layouts-panel')
@section('content')
      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            ADMINISTRACION
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{route('panel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            {{-- <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li> --}}
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="callout callout-info">
            <h4>Bienvenido al Panel de Control!</h4>
            <p></p>
          </div>
          <!-- Default box -->
          @foreach ($mensaje as $sms)
            <div class="box collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title"><strong>{{$sms->name}}</strong> mando un mensaje {{ $sms->created_at->diffForHumans() }} </h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  {{-- <button class="btn btn-box-tool toggle-button{{$sms->id}}" data-id="{{$sms->id}}" id="boton" data-toggle-target=".box-body{{$sms->id}}" > --}}
                    <i id="icono" class="fa fa-plus">{{$sms->status==0 ? " No Leído" : " Leído"}}</i>
                  </button>
                  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"> Eliminar</i>
                  </button>
                </div>
              </div>
              <div class="box-body" style="display: none">
                <h5 class="box-title"><strong>Email: </strong> {{$sms->email}}</h5>
                <h5 class="box-title"><strong>Tel: </strong> {{$sms->email}}</h5>
                <p>Hola. Que tengas un buen día!</p>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          @endforeach
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Agrega esto a tu sección de scripts -->
<!-- Agrega esto a tu sección de scripts -->



      @endsection
