@extends('layouts.layouts-panel')
@section('content')
      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      {{-- Mensaje  --}}
      @if (session('message'))
        <div class="alert alert-succes" style="color:rgb(0, 255, 136)" role="alert">
          <strong>{{ session('message') }}</strong>
        </div>
      @endif
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
            <h4>Bienvedni al Panel de Control!</h4>
            <p></p>
          </div>
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Grafico de visitas</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              Hola. Que tengas un buen día!
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

      @endsection
