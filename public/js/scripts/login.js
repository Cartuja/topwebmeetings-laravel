function Login()
{
  // Hay que mandar el token para que no de el error 500
  var log = jQuery("[name=log]").val();
  var pwd = jQuery("[name=pwd]").val();
  var _token = jQuery("[name=_token]").val();

  var datos = {'log':log, 'pwd':pwd, '_token':_token}

  if(log == "" || pwd == "")
  {
    jQuery('#error_login').html("<br><div id='error_registro' class='sc_infobox sc_infobox_style_error'> Rellena todos los campos. </div>");
  }
  else{
    // console.log(datos);
  	jQuery.ajax({
  		async: true,
  		type: "POST",
  		dataType: "json",
  		contentType: "application/x-www-form-urlencoded",
  		url: "/ajax/login",
  		data: datos,
  		beforeSend:function()
  		{
  		},
  		success:function(respuesta)
  		{
      //  console.log(respuesta)
        if(respuesta.ok==1) //Si existe en la bdd
        {
          location.reload();
        }
        else {
          jQuery('#error_login').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> El email o contraseña no es correcto </div>");
        }
  		},
      timeout:3000,
  		error:function(error)
  		{
  			jQuery('#error_login').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
  		}
  	});
  }
  return false;
};
