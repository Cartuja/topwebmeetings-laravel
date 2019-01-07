function guardar(){
  var id_web = jQuery("#id_web").val();;
  var nombre_web = jQuery("#nombre_web").val();
  var descripcion_web = jQuery("#editor").children().text();
  var logo_web = jQuery("#logo_web").val();
  var url_web = jQuery("#url_web").val();
  var caracteristica_1_web = jQuery("#caracteristica_1_web").val();
  var caracteristica_2_web = jQuery("#caracteristica_2_web").val();
  var caracteristica_3_web = jQuery("#caracteristica_3_web").val();
  var tags = jQuery("#tags").val();
  var _token = jQuery('[name=_token]').val();
  var error = false;

  var datos = {
                'id_web':id_web,
                'nombre_web':nombre_web,
                'descripcion_web':descripcion_web,
                'logo_web':logo_web,
                'url_web':url_web,
                'caracteristica_1_web':caracteristica_1_web,
                'caracteristica_2_web':caracteristica_2_web,
                'caracteristica_3_web':caracteristica_3_web,
                'tags':tags,
                '_token':_token
              };

  if(nombre_web == "")
  { //si el nombre esta vacio
    jQuery("#nombre_web").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"}); //input con borde rojo
    jQuery("#div_nombre_web").html("<div id='div_nombre_web' class='sc_infobox sc_infobox_style_error'> Rellena el nombre. </div>"); //y añadimos un div que dice el mensaje de error
    error = true;
  }
  else
  { //si no esta vacio
    jQuery("#nombre_web").css({"border-color": "green", "border-width":"2px", "border-style":"solid"}); //rellenamos añadimos borde verde al input
    jQuery("#div_nombre_web").html("<div style='display:none;' class='sc_infobox sc_infobox_style_error'></div>"); //quitamos el div que muestra mensaje error
  }

  if(descripcion_web == "")
  {
    jQuery("#editor").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_descripcion_web").html("<div id='div_descripcion_web' class='sc_infobox sc_infobox_style_error'> Rellena la descripcion. </div>");
    error = true;
  }
  else
  {
    jQuery("#editor").css({"border-color": "green",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_descripcion_web").html("<div style='display: none;' id='div_descripcion_web' class='sc_infobox sc_infobox_style_error'></div>");
  }

  var pattern = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
  if (!pattern.test(url_web))
  {
    jQuery("#url_web").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_url_web").html("<div style='width: 50%;' class='sc_infobox sc_infobox_style_error'> La url no es valida. </div>");
    error = true;
  }
  else
  {
    jQuery("#url_web").css({"border-color": "green",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_url_web").html("<div style='display: none;' class='sc_infobox sc_infobox_style_error'></div>");
  }

  if(caracteristica_1_web == "")
  {
    jQuery("#caracteristica_1_web").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_caracteristica_1").html("<div id='div_caracteristica_1' class='sc_infobox sc_infobox_style_error'> Rellena la caracteristica 1. </div>");
    error = true;
  }
  else
  {
    jQuery("#caracteristica_1_web").css({"border-color": "green",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_caracteristica_1").html("<div style='display:none;' id='div_caracteristica_1' class='sc_infobox sc_infobox_style_error'></div>");
  }

  if(caracteristica_2_web == "")
  {
    jQuery("#caracteristica_2_web").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_caracteristica_2").html("<div id='div_nombre_web' class='sc_infobox sc_infobox_style_error'> Rellena la caracteristica 2. </div>");
    error = true;
  }
  else
  {
    jQuery("#caracteristica_2_web").css({"border-color": "green",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_caracteristica_2").html("<div style='display:none;' id='div_caracteristica_2' class='sc_infobox sc_infobox_style_error'></div>");
  }

  if(caracteristica_3_web == "")
  {
    jQuery("#caracteristica_3_web").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_caracteristica_3").html("<div id='div_nombre_web' class='sc_infobox sc_infobox_style_error'> Rellena la caracteristica 3. </div>");
    error = true;
  }
  else
  {
    jQuery("#caracteristica_3_web").css({"border-color": "green",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_caracteristica_3").html("<div style='display:none;' id='div_caracteristica_3' class='sc_infobox sc_infobox_style_error'></div>");
  }

  if(tags == "")
  {
    jQuery("#tags").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_tags_web").html("<div id='div_nombre_web' class='sc_infobox sc_infobox_style_error'> Rellena los tags. </div>");
    error = true;
  }
  else
  {
    jQuery("#tags").css({"border-color": "green",  "border-width":"2px", "border-style":"solid"});
    jQuery("#div_tags_web").html("<div style='display:none;' id='div_tags_web' class='sc_infobox sc_infobox_style_error'></div>");
  }

  if(!error)
  {
    jQuery.ajax({
  		async: true,
  		type: "POST",
  		dataType: "json",
  		contentType: "application/x-www-form-urlencoded",
  		url: "/ajax/guardarWeb",
  		data: datos,
  		beforeSend:function()
  		{
  		},
  		success:function(respuesta)
  		{
        //console.log(respuesta);
        if(respuesta.ok == 1)
        {
          jQuery('#respuesta_añadir_web').html("<br><div style'width:50%;' id='respuesta_añadir_web' class='sc_infobox sc_infobox_style_success'> ¡Has actualizado la web! </div>");
        }
        else if(respuesta.ok == 2)
        {
          console.log(respuesta);
          jQuery('#respuesta_añadir_web').html("<br><div style'width:50%;' id='respuesta_añadir_web' class='sc_infobox sc_infobox_style_success'> ¡Has añadido nueva web! </div>");

        }
        else{
          jQuery('#respuesta_añadir_web').html("<br><div style'width:50%;' id='respuesta_añadir_web' class='sc_infobox sc_infobox_style_error'> Rellena todos los campos </div>");
        }

  		},
  		error:function(error)
  		{
  			jQuery('#error_login').html("<br><div id='error_login' class='sc_infobox sc_infobox_style_error'> Internal Server Error </div>");
  		}
  	});
  }

  return false;
}
