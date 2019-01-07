function Registro()
{
  var nombre = jQuery("[name=registration_username]").val();
  var email = jQuery("[name=registration_email]").val();
  var pass = jQuery("[name=registration_pwd]").val();
  var pass2 = jQuery("[name=registration_pwd2]").val();
  var _token = jQuery("[name=_token]").val();
  var datos =  { 'nombre':nombre, 'email':email, 'pass':pass, 'pass2':pass2, '_token':_token };
  var error = false;

  //Validar email
  var regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  var validar_email = regex.test(email) ? true : false;
  //Validamos contraseña
  var regex_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
  var validar_pass = regex_pass.test(pass) ? true : false;
  var validar_pass2 = regex_pass.test(pass2) ? true : false;

  if(nombre == '' || email == '' || pass == '' || pass2 == '')
  {
    jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Rellena todos los campos. </div>");
    error = true;
  } else if(!validar_email){
    jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Email no valido. </div>");
    error = true;
  } else if(pass != pass2 ){
    jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Las contraseñas son diferentes. </div>");
    error = true;
  } else if(!validar_pass || !validar_pass2){
    error = true;
    jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> La contraseña debe tener entre 8 y 15 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula, sin blancos y al menos un caracter especial. </div>");
  }

  if(error == false){ //Si no hay errores de campos vacios, email no valido o contraseñas diferentes
    //console.log(datos); //se registra
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
        console.log(datos);
        console.log(respuesta)
        if(respuesta.ok==1)
        {
          location.reload(); //Cuando se registra, directamente accede a la web
          //jQuery('#error_registro').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_success'> Te has registrado. </div>");
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
