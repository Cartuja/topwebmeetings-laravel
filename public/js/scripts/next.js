function next(id_web){
  //var id_web = id_web;

  var datos = { 'id_web':id_web };
  console.log(datos);

    jQuery.ajax({
      type: "POST",
      url: "/ajax/next.php",
      dataType: "json",
      data: datos,
    }).done(function(respuesta) {
      console.log(respuesta);
      //jQuery("#nombre_web").html(respuesta.post)
    });
    return false;
}
