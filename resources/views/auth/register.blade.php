@extends('principal')

@section('contenido')
<div id="popup_register" class="popup_form">
<div class="popup_body theme_article">
<h4 class="popup_title">¡Regístrate!</h4>
<div id="error_registro"></div>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="popup_field"><input type="text" name="registration_username" id="registration_username" placeholder="Nombre (usuario)*" /></div>
    <div class="popup_field"><input type="text" name="registration_email" id="registration_email" placeholder="Email*" /></div>
    <div class="popup_field"><input type="password" name="registration_pwd" id="registration_pwd" placeholder="Contraseña*" /></div>
    <div class="popup_field"><input type="password" name="registration_pwd2" id="registration_pwd2" placeholder="Confirma contraseña*" /><br><br></div>
    <div class="popup_field theme_info registration_role"><h6>Política de privacidad:</h6>
    <input type="radio" name="registration_role" id="registration_role2" value="1" checked="nochecked" />
    <label class="lopd" for="registration_role2">He leído, entiendo y acepto la <a href="#">política de privacidad</a></label>
    </div>
    <div class="popup_field popup_button"><button onclick="return Registro()" class="theme_button">Registrarse</button></div>
</div>
</div>
@endsection
