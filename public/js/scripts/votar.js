function Votar(tipo_votacion)
{
  var valoracion_votacion=jQuery('[name=valoracion_votacion]:checked').val();
  var id_web=jQuery("[name=idweb]").val();
  var id_user = jQuery("[name=id_usuario]").val();
  var _token = jQuery("[name=_token]").val();

  var datos={ 'id_web':id_web, 'valoracion_votacion':valoracion_votacion, 'tipo_votacion':tipo_votacion, 'id_user':id_user, '_token':_token };

  console.log(datos);

  if(datos){
    jQuery.ajax({
  		async: true,
  		type: "POST",
  		dataType: "json",
  		contentType: "application/x-www-form-urlencoded",
  		url: "/ajax/votar",
  		data: datos,
  		beforeSend:function()
  		{
  		},
  		success:function(respuesta)
  		{
      //  console.log(respuesta)
        if(respuesta.ok==0) //Si existe en la bdd
        {
          jQuery('#resultado_votar').html("<br><div id='error_votar' class='sc_infobox sc_infobox_style_success'> ¡Has votado! </div>");
        }
        else
        {
          jQuery('#resultado_votar').html("<br><div id='error_votar' class='sc_infobox sc_infobox_style_error'> Ya has votado </div>");
        }
  		},
      timeout:3000,
  		error:function(error)
  		{
  			jQuery('#error_login').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
  		}
  	});
  }

  return false; //siempre
}
