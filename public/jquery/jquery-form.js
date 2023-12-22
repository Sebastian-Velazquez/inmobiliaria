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