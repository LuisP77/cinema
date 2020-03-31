$( document ).ready(function() {

  llenar_town_select();
  $("#state-select").change(function() {
    llenar_town_select();
  });

});

function llenar_town_select(){
  var id = $( "#state-select" ).val();
  var route = "/cinema/public/test";
  var token = $("#token").val();
  $.ajax({
      url: route,
      headers: {'X-CSRF-TOKEN': token},
      type: 'POST',
      dataType: 'json',
      data: {
          id: id,
      },
      success: function(data){
        console.log(data);
        $("#town-select").empty();
        $.each(data['towns'], function(key,value){
          $("#town-select").append('<option value="'+value.id+'">'+value.name+'</option>');
        })
      },
      error: function (data) {

      },
      complete : function(xhr, status) {
      }
  });

}
