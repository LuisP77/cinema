$( document ).ready(function() {

// Llenar tabla de géneros
    var tablaDatos = $("#datos");
    var route = "http://localhost/cinema/public/generos";
    $.get(route, function(res){
        $(res[0]).each(function(key, value){
            htmlBtn1 = '<td><button class="btn btn-primary btn-genre-edit" value-id="' + value.id + '" data-toggle="modal" data-target="#edit-genre-modal">Editar</button>';
            htmlBtn2 = '<button class="btn btn-danger btn-genre-delete" value-id="' + value.id + '">Eliminar</button></td>';
            tablaDatos.append('<tr id="genre-row-' + value.id + '"><td id="genre-name-' + value.id + '">' + value.genre + '</td>' + htmlBtn1 + htmlBtn2 + '</tr>');
        });
    });

    setTimeout( function() {
      // Editar Género
        //Mostrar dialogo
        $(".btn-genre-edit").on('click', function(){
            var id = $(this).attr("value-id");
            var route = "http://localhost/cinema/public/genero/"+ id +"/edit";
            $.get(route, function(res){
                $("#genre").val(res.genre);
                $("#hidden-genre-id").val(res.id);
            });
        });
        //Actualizar género
        $("#genre-actualizar").on('click', function(){
            var id = $("#hidden-genre-id").val();
            var genre = $("#genre").val();
            var token = $("#token").val();
            var route = "http://localhost/cinema/public/genero/"+ id;
            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN': token},
                type: 'PUT',
                dataType: 'json',
                data: {genre: genre},
                success: function(json){
                    $("#msj-success").fadeIn();
                    $("#genre-name-" + id).html(genre);
                    $('#edit-genre-modal').modal('toggle');
                },
                error: function (xhr, status) {
                },
                complete : function(xhr, status) {
                }
            });
        });

      // Eliminar Género
        $(".btn-genre-delete").on('click', function(){
          var id = $(this).attr("value-id");
          var token = $("#token").val();
          var route = "http://localhost/cinema/public/genero/"+ id;
          $.ajax({
              url: route,
              headers: {'X-CSRF-TOKEN': token},
              type: 'DELETE',
              dataType: 'json',
              success: function(json){
                  $("#msj-success").fadeIn();
                  $("#genre-row-" + id).fadeOut();
              },
              error: function (xhr, status) {
              },
              complete : function(xhr, status) {
              }
          });
        });
    }, 1000);

});
