function deletComent(){
  var id_comentario=jQuery("[name=id_comentario]").val();
  var id_web=jQuery("[name=idweb]").val();
  var _token = jQuery("[name=_token]").val();

  var datos = { 'id_comentario':id_comentario, 'id_web':id_web, '_token':_token};
	//console.log(datos);
  if(datos)
  {
    jQuery.ajax({
  		async: true,
  		type: "POST",
  		dataType: "json",
  		contentType: "application/x-www-form-urlencoded",
  		url: "/ajax/deleteComent",
  		data: datos,
  		beforeSend:function()
  		{
  		},
      success:function(respuesta)
  		{
        //console.log(respuesta)
        if(respuesta.ok==1) //Si se elimina
        {
          jQuery('#resultado_eliminar_comentario').html("<br><div id='resultado_eliminar_comentario' class='sc_infobox sc_infobox_style_success'> Has eliminado el comentario </div>");
        }
        else {
          jQuery('#resultado_eliminar_comentario').html("<br><div id='resultado_eliminar_comentario' class='sc_infobox sc_infobox_style_error'> No se ha podido eliminar el comentario </div>");
        }
  		},
      timeout:3000,
  		error:function(error)
  		{
  			jQuery('#error_login').html("<br><div id='resultado_eliminar_comentario' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
  		}
  	});
  }
  return false;
};
