function addWeb(){
  //retornamos campos a vacio
  jQuery('#nombre_web').val();
  jQuery("#editor").children().text('');
  jQuery('#url_web').val();
  jQuery('#caracteristica_1_web').val();
  jQuery('#caracteristica_2_web').val();
  jQuery('#caracteristica_3_web').val();
  jQuery('#tags').val();

// boton añadir y eliminar se esconden y solo podemos grabar cuando no exista
  return false;
}
