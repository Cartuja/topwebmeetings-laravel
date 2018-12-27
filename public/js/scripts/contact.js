function contact(){

  var nombre = jQuery("#nombre").val();
  var email = jQuery("#emailFooter").val();
  var mensaje = jQuery("#mensaje").val();

  var datos = { 'nombre':nombre, 'email':email, 'mensaje':mensaje };
  console.log(datos);

  if(datos){
    jQuery.ajax({
      type: "POST",
      url: "../../ajax/correo.php",
      dataType: "json",
      data: datos,
    }).done(function(respuesta) {
      jQuery("#resultado_contact").html(respuesta.html);
      console.log(respuesta);
    });
  }

  return false;
}
