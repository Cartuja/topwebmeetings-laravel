function Login()
{
	jQuery.ajax({
		async: true,
		type: "POST",
		dataType: "json",
		contentType: "application/x-www-form-urlencoded",
		url: "/ajax/login",
		data:
		{
			"log":log,
			"pass":pass
		},
		beforeSend:function()
		{
		},
		success:function(respuesta)
		{
      if(respuesta.ok)
      {
        location.reload();
      }
		},
		error:function()
		{
			jQuery('#error_registro').html("error");
		}
	});
};
