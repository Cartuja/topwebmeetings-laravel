function eliminar(){
  var id_web = jQuery("#id_web").val();;
  var _token = jQuery('[name=_token]').val();

  var datos = {
                'id_web':id_web,
                '_token':_token
              };

  jQuery.ajax({
    async: true,
    type: "POST",
    dataType: "json",
    contentType: "application/x-www-form-urlencoded",
    url: "/ajax/eliminarWeb",
    data: datos,
    beforeSend:function()
    {
    },
    success:function(respuesta)
    {
      //console.log(respuesta);
      if(respuesta.ok == 1){
        jQuery('#respuesta_eliminar_web').html("<br><div style'width:50%;' id='respuesta_añadir_web' class='sc_infobox sc_infobox_style_success'> Has eliminado la web </div>");
      } else{
        jQuery('#respuesta_eliminar_web').html("<br><div style'width:50%;' id='respuesta_añadir_web' class='sc_infobox sc_infobox_style_error'> Error al borrar la web </div>");
      }
    },
    timeout:5000,
    error:function(error)
    {
      jQuery('#error_login').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
    }
  });

  return false;
}
