function Registrarse()
{
  var nombre = jQuery("[name=registration_username]").val();
  var email = jQuery("[name=registration_email]").val();
  var pass = jQuery("[name=registration_pwd]").val();
  var pass2 = jQuery("[name=registration_pwd2]").val();
  var datos =  { 'nombre':nombre, 'email':email, 'pass':pass, 'pass2':pass2 };
  console.log(datos);

  if(datos){
    jQuery.ajax({
      type: "POST",
      url: "../../ajax/registrarse.php",
      dataType: "json",
      data: datos,
    }).done(function(respuesta) {
      if(respuesta){
        jQuery("#resultado_registrarse").html(respuesta.html);
        jQuery("#resultado_registrarse").html(respuesta.html2);
        console.log(respuesta);
      }
    });
  }

  return false; //siempre
}
