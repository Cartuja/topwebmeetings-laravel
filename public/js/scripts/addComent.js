function addComent(){
  var id_usuario=jQuery("[name=idUsuario]").val();
  var id_web=jQuery("[name=idWeb]").val();
  var nombre=jQuery("[name=author]").val();
  var email=jQuery("[name=email]").val();
  var coment=jQuery("textarea[id=comment]").val();
  var _token = jQuery("[name=_token]").val();
  var error = false;

  var datos = { 'id_usuario':id_usuario, 'id_web':id_web, 'nombre':nombre, 'email':email, 'coment':coment, '_token':_token };

  jQuery.ajax({
    async: true,
    type: "POST",
    dataType: "json",
    contentType: "application/x-www-form-urlencoded",
    url: "/ajax/addComent",
    data: datos,
    beforeSend:function()
    {
    },
    success:function(respuesta)
    {
      console.log(respuesta)
      if(respuesta.ok==2) //Si se añade el comentario
      {
        jQuery('#resultado_añadir_comentario').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_success'> ¡Has añadido el comentario! </div>");
      }
      else if(respuesta.ok==1)
      {
        jQuery('#resultado_añadir_comentario').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Tienes que registrarte para comentar. </div>");
      }
      else if(respuesta.ok==3)
      {
        jQuery("#resultado_añadir_comentario").html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Rellena los campos </div>");
      } else{
        jQuery("#resultado_añadir_comentario").html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Vuelve a intentarlo mas tarde. </div>");
      }
    },
    timeout:3000,
    error:function(error)
    {
      jQuery('#resultado_añadir_comentario').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
    }
  });

  return false; //siempre
}
