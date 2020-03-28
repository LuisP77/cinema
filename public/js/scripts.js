$( document ).ready(function() {

// Registrar Género
    $("#genre-registro").click(function(){
      var dato = $("#genre").val();
      var token = $("#token").val();
      var route = "http://localhost/cinema/public/genero";
      $.ajax({
          url: route,
          headers: {'X-CSRF-TOKEN': token},
          type: 'POST',
          dataType: 'json',
          data: {
              genre: dato,
          },
          success: function(){
              $("#msj-success").fadeIn();
          },
          error: function (data) {
              var error = data.responseJSON.errors.genre[0];
              error = error.replace('genre', 'género');
              close = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
              error = close + error;
              $("#msj-error").html(error);
              $("#msj-error").fadeIn();
          }
      })
    });


// Evitar destroy alert
    $(".alert").on("close.bs.alert", function () {
        $(".alert").hide();
        return false;
    });

})
