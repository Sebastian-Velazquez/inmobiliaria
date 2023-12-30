var urlOutstanding = "http://localhost/inmobiliaria/public/outstanding/";

window.addEventListener("load", function(){
    //alert("La pagina fuue cargada con exito!")
    console.log("jQuery funcionando");
    /** mandar get */
    // Detectar el cambio en cualquier checkbox con la clase 'miCheckbox'
    $('.miCheckbox').change(function() {
      $.ajax({
        type: "GET",
        url: urlOutstanding + $(this).data('id'),
        data:  {isChecked: $(this).is(':checked')},
        success: function (response) {
          console.log(response);
        },
        success: function(data) {
          // Manejar la respuesta exitosa del servidor
          console.log(data);
        },
        error: function(error) {
            // Manejar errores de la solicitud
            console.error('Error:', error);
          }
      });
    })
  });