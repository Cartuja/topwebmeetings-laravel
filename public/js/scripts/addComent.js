function addComent(){
  var idUsuario=jQuery("[name=idUsuario]").val();
  var idweb=jQuery("[name=idWeb]").val();
  var nombre=jQuery("[name=author]").val();
  var email=jQuery("[name=email]").val();
  var coment=jQuery("textarea[id=comment]").val();

  var datos = { 'idUsuario':idUsuario, 'idweb':idweb, 'nombre':nombre, 'email':email, 'coment':coment };

  console.log(datos);

  if(datos){
    jQuery.ajax({
      type: "POST",
      url: "../../ajax/addComent.php",
      dataType: "json",
      data: datos,
    }).done(function(respuesta) {
      jQuery("#resultado_comentario").html(respuesta.html);
      jQuery("#resultado_comentario").html(respuesta.html2);
      console.log(respuesta);
    });
  }

  return false; //siempre
}
