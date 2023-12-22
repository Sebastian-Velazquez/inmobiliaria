@extends('layouts.layouts-panel')
@section('content')
      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      
      <div class="content-wrapper">
        {{-- Mensaje  --}}
        @if (session('message'))
          <div class="alert alert-succes" style="color:rgb(0, 255, 136)" role="alert">
            <strong>{{ session('message') }}</strong>
          </div>
        @endif
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











        <style>
          body {
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              height: 100vh;
          }
  
          #imagen-container {
              /* text-align: center; */
              white-space: nowrap; /* Evita que las imágenes se desborden a una nueva línea */
              overflow-x: auto; /* Agrega una barra de desplazamiento horizontal si es necesario */
          }
  
          .imagen-item {
              display: inline-block;
              margin-right: 10px;
              text-align: center;
          }
  
          .eliminar-icono {
              cursor: pointer;
              font-size: 1.5em;
              color: red;
          }
  
          #btn-cargar-imagenes {
              margin-top: 20px;
          }
  
          #btn-agregar-imagen {
              font-size: 2em;
              cursor: pointer;
              color: green;
              margin-right: 10px;
          }
  
          #input-imagen {
              display: none; /* Oculta el input de archivo */
          }
      </style>
  </head>
  <body>
  
  <!-- Contenedor de imágenes -->
  <div id="imagen-container" class="container mt-5">
      <!-- Las imágenes se cargarán aquí dinámicamente -->
      <span id="btn-agregar-imagen" onclick="document.getElementById('input-imagen').click()" >+</span>
  </div>
  
  <!-- Input para cargar nuevas imágenes -->
  <div class="container mt-3">
      <input type="file" id="input-imagen" accept="image/*" multiple>
      <button class="btn btn-primary mt-2" id="btn-cargar-imagenes">Cargar Imágenes</button>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
  
  // Supongamos que recibes el array de imágenes en formato JSON desde tu controlador de Laravel
  var imagenesArray = [
      { url: 'https://via.placeholder.com/150' },
      { url: 'https://via.placeholder.com/150' },
      // ... más imágenes ...
  ];
  
  // Función para mostrar las imágenes en el contenedor
  function mostrarImagenes() {
      // Limpiamos el contenedor
      $('#imagen-container').empty();
  
      // Iteramos sobre el array de imágenes y las agregamos al contenedor
      $.each(imagenesArray, function(index, imagen) {
          var $imagenDiv = $('<div class="imagen-item mb-3"></div>');
          var $imagen = $('<img src="' + imagen.url + '" class="img-thumbnail" alt="Imagen del producto">');
          var $eliminarIcono = $('<span class="eliminar-icono" data-index="' + index + '">&times;</span>');
  
          // Adjuntamos el evento de click para eliminar la imagen
          $eliminarIcono.click(function() {
              eliminarImagen(index);
          });
  
          $imagenDiv.append($imagen);
          $imagenDiv.append($eliminarIcono);
          $('#imagen-container').append($imagenDiv);
      });
  
      // Agregamos el botón de agregar imagen
      $('#imagen-container').append('<span id="btn-agregar-imagen" onclick="document.getElementById(\'input-imagen\').click()">+</span>');
  }
  
  // Función para eliminar una imagen del array y de la base de datos
  function eliminarImagen(index) {
      // Simulamos la eliminación de la imagen del array
      imagenesArray.splice(index, 1);
      // Mostramos las imágenes actualizadas
      mostrarImagenes();
  }
  
  // Función para cargar nuevas imágenes en la base de datos
  function cargarImagenes(files) {
      var formData = new FormData();
  
      $.each(files, function(index, file) {
          formData.append('imagenes[]', file);
      });
  
      // Simulamos la carga de nuevas imágenes al array
      $.each(files, function(index, file) {
          imagenesArray.push({ url: URL.createObjectURL(file) });
      });
  
      // Mostramos las imágenes actualizadas
      mostrarImagenes();
  }
  
  // Llamamos a la función inicial para mostrar las imágenes al cargar la página
  $(document).ready(function() {
      mostrarImagenes();
  
      // Manejo del evento de carga de nuevas imágenes
      $('#btn-cargar-imagenes').click(function() {
          var input = $('#input-imagen')[0];
          cargarImagenes(input.files);
          // Limpiamos el input después de cargar las imágenes
          input.value = '';
      });
  });
  
  </script>

















      </div><!-- /.content-wrapper -->
      

      @endsection
