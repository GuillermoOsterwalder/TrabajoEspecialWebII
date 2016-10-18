$(document).ready(function(){
partialRender("mostrar_home");
actualizarBotones();

function actualizarBotones(){

$("#mostrar_opticas").on("click",function(){
partialRender("mostrar_opticas");
});

$("#mostrar_home").on("click",function(){
partialRender("mostrar_home");
});

$("#mostrar_adm_opt").on("click",function(){
partialRender("mostrar_adm_opt");
});

$("#mostrar_adm_marca").on("click",function(){
partialRender("mostrar_adm_marca");
});

$(".linkoptica").on("click",function(ev){
	ev.preventDefault();
	$.ajax({
		url: $(this).attr("href"),
		success: MostrarContenido,
		dataType: "html",
		error: MostrarError
	});
});

}

function partialRender(bton) {
$(".active").removeClass();
$("#"+bton).addClass("active");
CargarAjax(bton);
}

function CargarAjax(bton) {
	$.ajax({
		url: "index.php?action="+bton,
		success: MostrarContenido,
		dataType: "html",
		error: MostrarError
	});
}

function MostrarContenido(data){
$("#contenido").html(data);
actualizarBotones();
}

function MostrarError(){
$("#contenido").html("ERROR");
}

});
