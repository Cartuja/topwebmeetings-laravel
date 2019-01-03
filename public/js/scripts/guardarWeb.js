function guardar(){
  console.log("ok");

  var nombre_web = jQuery("#nombre_web").val();
  var descripcion_web = jQuery("#descripcion_web").val();
  var logo_web = jQuery("#logo_web").val();
  var url_web = jQuery("#url_web").val();
  var descripcion_web = jQuery("#descripcion_web").val();
  var descripcion_web = jQuery("#descripcion_web").val();
  var descripcion_web = jQuery("#descripcion_web").val();
  var descripcion_web = jQuery("#descripcion_web").val();

  var datos = { 'nombre_web':nombre_web, 'descripcion_web':descripcion_web, 'logo_web':logo_web, 'url_web':url_web};

  if(nombre_web == ""){
    jQuery("#nombre_web").css({"border-color": "red",  "border-width":"2px", "border-style":"solid"})
    jQuery("#nombre_web").hover(function(){
      jQuery(this).html("");
    });
  }
  if(descripcion_web == ""){
    jQuery("#div_descripcion_web").html("<div style='width: 50%;' class='sc_infobox sc_infobox_style_error'> La descripcion no puede estar vacia.</div>")
  }
  if(logo_web == ""){
    jQuery("#div_logo_web").html("<div style='width: 50%;' class='sc_infobox sc_infobox_style_error'> Selecciona una imagen. </div>")
  }
  if(url_web == ""){
    jQuery("#div_url_web").html("<div style='width: 50%;' class='sc_infobox sc_infobox_style_error'> La url no puede estar vacia. </div>")
  } else{
    var pattern = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    if (!pattern.test(url_web)) {
        jQuery("#div_url_web").html("<div style='width: 50%;' class='sc_infobox sc_infobox_style_error'> La url no es valida. </div>")
    }
  }

  return false;
}
