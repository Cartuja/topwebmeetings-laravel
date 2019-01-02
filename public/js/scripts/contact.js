function contact(){

  var nombre = jQuery("#nombre").val();
  var email = jQuery("#emailFooter").val();
  var mensaje = jQuery("#mensaje").val();
  var _token = jQuery("[name=_token]").val();
  var error = false;

  var datos = { 'nombre':nombre, 'email':email, 'mensaje':mensaje, '_token':_token };
  var array_error = [];

  if(nombre == ''){
    error = true;
    array_error.push('nombre');
  }

  if(email == ''){
    error = true;
    array_error.push('email');
  }

  if(mensaje == ''){
    error = true;
    array_error.push('mensaje');
  }

  if(!error)
  {
    jQuery.ajax({
      type: "POST",
      url: "/ajax/contact",
      dataType: "json",
      data: datos,
    }).done(function(respuesta) {
      console.log(respuesta);
      if(respuesta.ok==1){
        jQuery("#resultado_contact").html("<div id='error_votar' class='sc_infobox sc_infobox_style_success'> Gracias por contactar con nosotros </div>");
      } else{
        jQuery("#resultado_contact").html("<div id='error_login' class='sc_infobox sc_infobox_style_error'> Rellena todos los campos </div>");
      }
    });
  }
  else
  {
    jQuery("#resultado_contact").html("<div id='error_login' class='sc_infobox sc_infobox_style_error'> Rellena el campo del " + array_error +"</div>");
  }

  return false;
}
