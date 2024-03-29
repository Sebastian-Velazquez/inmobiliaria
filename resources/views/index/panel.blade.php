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
          <div style="width: 80%; margin: auto;">
            <canvas id="miGrafica"></canvas>
        </div>
        
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('miGrafica').getContext('2d');
    
            var datosLaravel = @json($properties);
            var data = {
                labels: datosLaravel.map(function(item) { return item.adress+' '+ item.adress_number}),
                datasets: [{
                    data: datosLaravel.map(function(item) { return item.view_property }),
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#148F77', '#AEB6BF',
                                      '#F5B041', '#212F3D', '#D98880', '#DC7633', '#6C3483' ]
                }]
            };
    
            var options = {
                responsive: true
            };
    
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: options
            });
        });
    </script>
    
      @endsection
