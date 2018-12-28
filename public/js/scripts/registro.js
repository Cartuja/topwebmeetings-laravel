function Registro()
{
  var nombre = jQuery("[name=registration_username]").val();
  var email = jQuery("[name=registration_email]").val();
  var pass = jQuery("[name=registration_pwd]").val();
  var pass2 = jQuery("[name=registration_pwd2]").val();
  var _token = jQuery("[name=_token]").val();
  var datos =  { 'nombre':nombre, 'email':email, 'pass':pass, 'pass2':pass2, '_token':_token };
  var error = false;

  if(nombre == '' || email == '' || pass == '' || pass2 == '')
  {
    jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Rellena todos los campos. </div>");
    error = true;
  }

  if(pass != pass2 ){
    jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Las contraseñas son diferentes. </div>");
    error = true;
  }

  if(error == false){ //Si no hay errores de campos vacios, email no valido o contraseñas diferentes
    console.log(datos); //se registra
  	jQuery.ajax({
  		async: true,
  		type: "POST",
  		dataType: "json",
  		contentType: "application/x-www-form-urlencoded",
  		url: "/ajax/registro",
  		data: datos,
  		beforeSend:function()
  		{
  		},
  		success:function(respuesta)
  		{
        console.log(respuesta)
        if(respuesta.ok==1)
        {
          jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_success'> Te has registrado. </div>");
        }
        else
        {
          jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Ya existe ese correo. </div>");
        }
  		},
  		error:function()
  		{
  			jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
  		}
	   });
   }
  return false;
};
