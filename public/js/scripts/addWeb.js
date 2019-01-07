function addWeb(){
  //retornamos campos a vacio
  jQuery('#nombre_web').val('');
  jQuery("#editor").children().text('');
  jQuery('#url_web').val('');
  jQuery('#caracteristica_1_web').val('');
  jQuery('#caracteristica_2_web').val('');
  jQuery('#caracteristica_3_web').val('');
  jQuery('#tags').val('');
  jQuery('#titulo_web').html("<h1> Nueva web </h1>");
  jQuery('#id_web').val('0');
  jQuery('#li_id_web').html("<li id='li_id_web' class='pager_current'><span title=''>"+0+"</span></li>");
  jQuery('#posicion_web').val('');


// boton añadir y eliminar se esconden y solo podemos grabar cuando no exista
  jQuery('#btn_eliminar_web').css('display', 'none');
  jQuery('#btn_add_web').css('display', 'none');
  return false;
}
