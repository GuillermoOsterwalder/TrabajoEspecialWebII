$(document).ready(function(){
  $('#enviar').on('click', function(ev){

    $.ajax({
      method: "POST",
      url: "formulario.php",
      data: $('#formulario').serialize(),
      success: function(datadevuelta){
        $('#mostrador').html(datadevuelta);
      },
      error: function() {
        alert('error!!');
      }
    })

    ev.preventDefault();

  });
});
