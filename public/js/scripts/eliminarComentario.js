function deletComent(){
  var idComent=jQuery("[name=idComent]").val();
  var idweb=jQuery("[name=idweb]").val();

  var datos = { 'idComent':idComent, 'idweb':idweb};
	console.log(datos);
  if(datos){
    jQuery.ajax({
      type: "POST",
      url: "../../ajax/DeletComent.php",
      dataType: "json",
      data: datos,
    }).done(function(respuesta) {
      jQuery("#resultado_eliminar").html(respuesta.html);
    });
  }
  return false; //siempre
}
