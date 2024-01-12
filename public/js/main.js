
window.addEventListener("load", function () {
  //alert("La pagina fuue cargada con exito!")
  console.log("jQuery funcionando");
  /** mandar get */
  // Detectar el cambio en cualquier checkbox con la clase 'miCheckbox'
  $('.miCheckbox').change(function() {
    $.ajax({
      type: "GET",
      url: $(this).data('url'),
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

window.addEventListener("load", function () {
  // Mandar get al cambiar un elemento select
  $('.ajax-class').on('change', function () {
    // Obtener el valor seleccionado
    var selectedValue = $(this).val();
    // Obtener el ID del producto (data-id)
    var productId = $(this).data('id');
// Asigna la clase correspondiente al select según la opción seleccionada para cambiar el color
if (selectedValue == 1) {
  $(this).removeClass('btn-warning').addClass('btn-success');
} else if (selectedValue == 2) {
  $(this).removeClass('btn-success').addClass('btn-warning');
}
    // Realizar la solicitud AJAX
    $.ajax({
      type: 'GET',
      url:  $(this).data('url'), 
      data: {
        productId: productId,
        selectedValue: selectedValue
      },
      success: function (response) {
        // Manejar la respuesta del servidor si es necesario
        console.log(response);
      },
      error: function (error) {
        // Manejar el error si es necesario
        console.error(error);
      }
      
    });
  });
});
