function Votar(tipo_votacion)
{
  jQuery("#error_votar").css("display","none");
  jQuery("#correcto_votar").css("display","none");

  var valoracion_votacion=jQuery('[name=valoracion_votacion]:checked').val();
  var id_web=jQuery("[name=idweb]").val();
  var tipo_votacion = tipo_votacion;
  var id_user = jQuery("[name=id_usuario]").val();

  var datos={ 'id_web':id_web, 'valoracion_votacion':valoracion_votacion, 'tipo_votacion':tipo_votacion, 'id_user':id_user };

  console.log(datos);

  if(datos){
    jQuery.ajax({
      type: "POST",
      url: "../../ajax/votar.php",
      dataType: "json",
      data: datos,
    }).done(function(respuesta) {
      jQuery("#resultado_votar").html(respuesta.html);
      jQuery("#resultado_votar").html(respuesta.html2);
      jQuery("#resultado_votar").html(respuesta.html3);
      console.log(respuesta);
    });
  }

  return false; //siempre
}
