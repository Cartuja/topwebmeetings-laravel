@extends('principal')

@section('contenido')
<!-- Login Acceder Form -->
<a href="#" id="toTop" class="theme_button icon-up-open-big"></a>
<div id="popup_login" class="popup_form">
    <div class="popup_body theme_article">
    <h4 class="popup_title">Login</h4>
		<div id="error_login"> </div>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="popup_field"><input type="text" name="log" id="log" placeholder="Login*" /></div>
        <div class="popup_field"><input type="password" name="pwd" id="pwd" placeholder="Password*" /></div>
        <div class="popup_field popup_button"><button onclick="return Login()" name="acceder" class="theme_button"> Login</button></div>
        <div class="popup_field forgot_password">
          <a href="#">Forgot password?</a>
        </div>
      <div class="popup_field register">
        <a href="#">Register</a>
      </div>
    </div>
</div>
<!-- /Login Acceder Form -->
@endsection
