function NuevaPass(){
  var correo = jQuery("[name=correo]").val();
  var pass = jQuery("[name=pass]").val();
  var pass2 = jQuery("[name=pass2]").val();
  var _token = jQuery("[name=_token]").val();
  var error = false;
  //Validamos email
  var regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  var validar_email = regex.test(correo) ? true : false;
  //Validamos contraseña
  var regex_pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
  var validar_pass = regex_pass.test(pass) ? true : false;
  var validar_pass2 = regex_pass.test(pass2) ? true : false;
  var datos = {
                'correo': correo,
                'pass': pass,
                'pass2': pass2,
                '_token': _token
              }

  //console.log(datos);

  if(correo == "" || pass == "" || pass2 == "")
  {
    error = true;
    jQuery('#error_nueva_pass').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Rellena todos los campos. </div>");
  } else if (!validar_email){
    error = true;
    jQuery('#error_nueva_pass').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Ese email no es valido. </div>");
  } else if (pass != pass2){
    error = true;
    jQuery('#error_nueva_pass').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Las contraseñas son diferentes. </div>");
  } else if(!validar_pass || !validar_pass2){
    error = true;
    jQuery('#error_nueva_pass').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> La contraseña debe tener entre 8 y 15 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula, sin blancos y al menos un caracter especial. </div>");
  }
  
  if(!error)
  {
    jQuery.ajax({
      async: true,
      type: "POST",
      dataType: "json",
      contentType: "application/x-www-form-urlencoded",
      url: "/ajax/NuevaPass",
      data: datos,
      beforeSend:function()
      {
      },
      success:function(respuesta)
      {
        //console.log(respuesta)
        if(respuesta.ok==1) //Si existe en la bdd
        {
          location.reload();
        }
        else {
          jQuery('#error_nueva_pass').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> El correo no existe </div>");
        }
      },
      timeout:3000,
      error:function(error)
      {
        jQuery('#error_nueva_pass').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
      }
    });
  }

}
