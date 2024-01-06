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
            <li><a href="{{route('panel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
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
                        <option value="" >Seleccionar</option>
                        @foreach ($typeProperty as $pro)
                        <option value="{{ $pro->id}}" {{old('tipoPropiedad') ? 'selected' : '' }}>{{ $pro->name}}</option>
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
                        <option value="{{ $ope->id}}" {{old('tipoOperacion') ? 'selected' : '' }}>{{ $ope->name}}</option>
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
                      <input type="text" name="adress" class="form-control" id="exampleInputPassword1" placeholder="Ej: Alberdi" value="{{old('adress') ? old('adress') : '' }}">
                      {{-- Mensaje de error --}}
                      @error('adress')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Numero de calle</label>
                      <input type="number" name="adressNumber" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2255" value="{{old('adressNumber') ? old('adressNumber') : ''}}">
                      {{-- Mensaje de error --}}
                      @error('adressNumber')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Precio</label>
                      <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Ej: 50200" value="{{old('price') ? old('price') : ''}}">
                      {{-- Mensaje de error --}}
                      @error('price')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Dimensiones</label>
                      <input type="text" name="dimension" class="form-control" id="exampleInputPassword1" placeholder="Ej: 10x40" value="{{old('dimension') ? old('dimension') : ''}}">
                      {{-- Mensaje de error --}}
                      @error('dimension')
                        <span class="alert alert-succes" style="color:red" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de habitaciones</label>
                      <input type="number" name="room" class="form-control" id="exampleInputPassword1" placeholder="Ej: 2" value="{{old('room') ? old('room') : ''}}">
                      {{-- Mensaje de error --}}
                        @error('room')
                          <span class="alert alert-succes" style="color:red" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cantidad de baños</label>
                      <input type="number" name="bathroom" class="form-control" id="exampleInputPassword1" placeholder="Ej: 1" value="{{old('bathroom') ? old('bathroom') : ''}}">
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
                        <input type="checkbox" name="diningRoom" value="1" {{old('diningRoom') ? 'checked' : ''}} > Comedor
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="yard"  value="1" {{old('yard') ? 'checked' : ''}} > Patio
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="pool" value="1" {{old('pool') ? 'checked' : ''}}> Piscina
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="garage" value="1" {{old('garage') ? 'checked' : ''}}> Garaje
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="gas" value="1" {{old('gas') ? 'checked' : ''}} > Gas 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="expenses" value="1" {{old('expenses') ? 'checked' : ''}} > Expensas 
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="kitchen" value="1" {{old('kitchen') ? 'checked' : ''}} > Cocina 
                      </label>
                    </div>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Maps Google</label>
                      <input type="text" name="maps" class="form-control" id="exampleInputPassword1" placeholder="<iframe> ... </iframe>" value="{{old('maps') ? old('maps') : ''}}">
                    </div>
                  </div><!-- /.box-body -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Descripción</label>
                    <textarea name="description" id="" cols="30" rows="10"  class="form-control" id="exampleInputPassword1" > {{old('description') ? old('description') : ''}} </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Imagen Portada</label>
                    <input type="file" name="main" id="exampleInputFile" accept="image/*">
                    {{-- Mensaje de error --}}
                    @error('main')
                    <span class="alert alert-succes" style="color:red" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    {{-- Mensaje de error --}}
                    @error('main.*')
                    <span class="alert alert-succes" style="color:red" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                      <!-- Contenedor para mostrar miniaturas de las imágenes -->
                      <div class="contenedor-imagenes">
                      <div id="imagen-preview-container"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Imagenes Detalle</label>
                    <input type="file" name="image[]" id="exampleInputFile2" multiple {{-- accept="image/*" --}}>
                    {{-- Mensaje de error --}}
                    @error('image')
                    <span class="alert alert-succes" style="color:red" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    {{-- Mensaje de error --}}
                    @error('image.*')
                    <span class="alert alert-succes" style="color:red" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <!-- Contenedor para mostrar miniaturas de las imágenes -->
                    <div class="contenedor-imagenes">
                      <div id="imagen-preview-container2"></div>
                                          </div>
                  </div>
                  <p class="help-block">Los formatos compartibles son: jpeg, png, jpg, gif</p>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->


          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <script>
            // Input - name="name"
    document.getElementById('exampleInputFile').addEventListener('change', function(event) {
      // Obtén la lista de archivos seleccionados
      var files = event.target.files;

      // Limpiar el contenedor de miniaturas antes de agregar nuevas miniaturas
      document.getElementById('imagen-preview-container').innerHTML = '';

      // Iterar sobre los archivos seleccionados
      for (var i = 0; i < files.length; i++) {
          var file = files[i];

          // Crear un objeto de archivo para la miniatura
          var reader = new FileReader();

          // Manejar el evento de carga para mostrar la miniatura
          reader.onload = function(e) {
              // Crear un elemento de imagen para la miniatura
              var img = document.createElement('img');
              img.src = e.target.result;
              img.alt = file.name;
              img.title = file.name;
              img.style.maxWidth = '100px'; // Establecer el ancho máximo según tus necesidades

              // Agregar la miniatura al contenedor
              document.getElementById('imagen-preview-container').appendChild(img);
          };

          // Leer el archivo como una URL de datos (base64) para mostrar la miniatura
          reader.readAsDataURL(file);
      }
  });
      // Manejo del cambio en el input de tipo file
      document.getElementById('exampleInputFile2').addEventListener('change', function(event) {
        // Obtén la lista de archivos seleccionados
        var files = event.target.files;
  
        // Limpiar el contenedor de miniaturas antes de agregar nuevas miniaturas
        document.getElementById('imagen-preview-container2').innerHTML = '';
  
        // Iterar sobre los archivos seleccionados
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
  
            // Crear un objeto de archivo para la miniatura
            var reader = new FileReader();
  
            // Manejar el evento de carga para mostrar la miniatura
            reader.onload = function(e) {
                // Crear un elemento de imagen para la miniatura
                var img = document.createElement('img');
                img.src = e.target.result;
                img.alt = file.name;
                img.title = file.name;
                img.style.maxWidth = '100px'; // Establecer el ancho máximo según tus necesidades
  
                // Agregar la miniatura al contenedor
                document.getElementById('imagen-preview-container2').appendChild(img);
            };
  
            // Leer el archivo como una URL de datos (base64) para mostrar la miniatura
            reader.readAsDataURL(file);
        }
    });
      </script>

      @endsection