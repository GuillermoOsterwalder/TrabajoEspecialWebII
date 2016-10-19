$(document).ready(function(){
"use strict";

var archivos;

$("#btnAgregarOptica").on("click", function(ev){
      ev.preventDefault();
      AgregarOptica();
  });

  $("#btnAgregarMarca").on("click", function(ev){
        ev.preventDefault();
        AgregarMarca();
    });


  $("#imagenesASubir").on("change", function(ev){
      archivos = ev.target.files;
  });

  $('.btnBorrarMarca').click(function(){
    event.preventDefault();
     var id_marca = $(this).data("id");
      $.ajax({
                url:"index.php?action=borrar_marca&id_marca=" + id_marca,
                dataType:'HTML',
                method: 'GET',
                success: function(data){
                  $('#contenido').html(data);
                  $( "#mostrar_adm_marca" ).trigger( "click" );
                }
              });
              event.preventDefault();
});

$('.btnBorrarOptica').click(function(){
  event.preventDefault();
    var id_optica = $(this).data("id");
    $.ajax({
              url:"index.php?action=borrar_optica&id_optica=" + id_optica,
              dataType:'HTML',
              method: 'GET',
              success: function(data){
                $('#contenido').html(data);
                $( "#mostrar_adm_opt" ).trigger( "click" );
              }
            });
});

//$('.btnModificarMarca').click(function(){
  //event.preventDefault();
//});


  function AgregarMarca(ev){
  if(($("#marca").val()!="")) {
  var marca = $("#marca").val();

  var datos = new FormData();

  datos.append("marca",marca);

  subirAjax(datos,"agregar_marca");
  $( "#mostrar_adm_marca" ).trigger( "click" );
  }
  else{
    alert("Faltaron datos");
  }
  ev.preventDefault();
  }

function subirAjax(datos,act){
  $.ajax({
    method: "POST",
    contentType: false,
    processData: false,
    data: datos,
    cache: false,
    url: "index.php?action="+act,
    success: function(data){
      alert("El mensaje ha sido enviado con exito.");
      $("#titulo").val("");
      $("#descripcion").val("");
      },
    error: function(data){$("#AjaxContent").text("Error");}

  });

}


function AgregarOptica(ev){
if(($("#titulo").val()!="")&&($("#descripcion").val()!="")) {
var titulo = $("#titulo").val();
var descripcion = $("#descripcion").val();
var marca = $('#marca :selected').val();

var datos = new FormData();

if(typeof archivos !== "undefined") {
  $.each(archivos, function(key, value)
  {
  datos.append(key, value);
  });
}

datos.append("titulo",titulo);
datos.append("descripcion",descripcion);
datos.append("marca",marca);

subirAjax(datos,"agregar_optica");
$( "#mostrar_adm_opt" ).trigger( "click" );
}
else{
  alert("Faltaron datos");
}
ev.preventDefault();
}

});
