function Previo(){
  var id_web = jQuery("[name=id_web]").val();
  var _token = jQuery("[name=_token]").val();

  var datos = { 'id_web':id_web, '_token':_token };
  console.log(datos);
  jQuery.ajax({
    async: true,
    type: "POST",
    dataType: "json",
    contentType: "application/x-www-form-urlencoded",
    url: "/ajax/PreviaWeb",
    data: datos,
    beforeSend:function()
    {
    },
    success:function(respuesta)
    {
      if(respuesta == 0)
      {
        //console.log(respuesta);
        //jQuery('#li_previo').css("display", "none");
        //jQuery('#li_next').css("display", "hidden");
      }
      else
      {
        jQuery('#id_web').val(respuesta[0]['IdWeb']);
        jQuery('#li_id_web').html("<li id='li_id_web' class='pager_current'><span title=''>"+respuesta[0]['IdWeb']+"</span></li>");
        jQuery('#nombre_web').val(respuesta[0]['NombreWeb']);
        jQuery('#descripcion_web').html(respuesta[0]['DescripcionWeb']);
        jQuery('#url_web').val(respuesta[0]['UrlWeb']);
        jQuery('#caracteristica_1_web').val(respuesta[0]['Caracteristica1']);
        jQuery('#caracteristica_2_web').val(respuesta[0]['Caracteristica2']);
        jQuery('#caracteristica_3_web').val(respuesta[0]['Caracteristica3']);
        jQuery('#tags').val(respuesta[0]['Tags']);
      }
    },
    timeout:3000,
    error:function(error)
    {
      jQuery('#resultado_next').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
    }
  });
  return false;
}
