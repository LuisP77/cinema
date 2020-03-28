$( document ).ready(function() {

// Llenar tabla de géneros
    var tablaDatos = $("#datos");
    var route = "http://localhost/cinema/public/generos";

    $.get(route, function(res){
        $(res[0]).each(function(key, value){
            tablaDatos.append("<tr><td>" + value.genre + "</td></tr>");
        });
    });

});
