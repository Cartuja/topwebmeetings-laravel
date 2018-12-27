<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> TopWebMeetings </title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="http://puzzles.themerex.net/xmlrpc.php" />
  <link rel="icon" type="image/x-icon" href="images/favicon1.ico" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen:400,700&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic" type="text/css" media="all" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cabin:400,500,400italic,500italic,700,700italic&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic" type="text/css" media="all" />
	<link rel="stylesheet" href="/icon/fontello/css/fontello.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/icon/fontello/css/animation.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/shortcodes.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/color.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" id="main_style" />

	<link rel="stylesheet" href="/css/themes/regular.css" type="text/css" media="all" id="regular" />
	<link rel="stylesheet" href="/css/themes/redlight.css" type="text/css" media="all" id="redlight" />
	<link rel="stylesheet" href="/css/themes/red.css" type="text/css" media="all" id="red" />
	<link rel="stylesheet" href="/css/themes/dark.css" type="text/css" media="all" id="dark" />
	<link rel="stylesheet" href="/css/themes/blue.css" type="text/css" media="all" id="blue" />
	<link rel="stylesheet" href="/css/themes/green.css" type="text/css" media="all" id="green" />
	<link rel="stylesheet" href="/css/themes/yellowdark.css" type="text/css" media="all" id="yellowdark" />
	<link rel="stylesheet" href="/css/themes/yellowlight.css" type="text/css" media="all" id="yellowlight" />
	<link rel="stylesheet" href="/css/themes/orange.css" type="text/css" media="all" id="orange" />
	<link rel="stylesheet" href="/css/responsive.css" type="text/css" media="all" />

	<link rel="stylesheet" href="/js/prettyphoto/css/prettyPhoto.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/js/mediaplayer/mediaelementplayer.css" type="text/css" media="all" />
	<link href="/css/color.css" rel="stylesheet" >
</head>
<body class="theme_regular puzzles_heavy reviews_5 puzzles_animations wide no-js" data-puzzlestyle="heavy">
<div id="page" class="theme_body">
	<header role="banner">
		<div id="header_top">
			<div class="top_line theme_accent_bg"></div>
			<div id="header_top_inner">
				<!-- Area login -->
				<div id="login_area">
					<a href="#" class="link_login icon-login-1 theme_accent_bg" title="Login"></a>
					<a href="#" class="link_register icon-key theme_accent_bg" title="Register"></a>
				</div>
				<!-- /Area Login -->

				<!-- breadcrumbs -->
				<div id="breadcrumbs_area">
				  <ul class="breadcrumbs">
				    <li class="home"><a href="{{ route('inicio') }}">Inicio</a></li>
				    <li class="home"><a href="{{ route('web') }}">Webs</a></li>
				    <li class="home"><a href="blog.php">Blog</a></li>
				  </ul>
				</div>
				<!-- /breadcrumbs -->

				<!-- Logo -->
					<div class="logo logo_text">
						<a href="index.html">
							<span class="logo_title theme_header">Top<span class="theme_accent">web</span>meetings</span><span class="logo_slogan theme_info"></span>
						</a>
					</div>
					<!-- /Logo -->
					
 		</div>
		<div id="header_middle_wrapper">
			<div id="header_middle"  >
				<div id="header_middle_inner">
					<div class="search_form_area theme_body">
						<form class="search_form" action="#" method="get"><input class="search_field" type="search" placeholder="Type your search query and press 'Enter' ..." value="" name="s"></form>
						<a href="#" class="search_close"><span class="icon-cancel-circled"></span></a>
					</div>

					<!-- main menu -->
					<nav id="mainmenu_area" class="mainmenu_area theme_menu" role="navigation">
					<ul id="mainmenu" class="sf-js-enabled">
						<li class="lightblue"><a href="{{ route ('inicio') }}" class="sf-with-ul">Inicio<span class="sf-sub-indicator icon-right-open"></span></a></li>
						<li class="brown"><a href="{{ route ('web') }} " class="sf-with-ul">Webs<span class="sf-sub-indicator icon-right-open"></span></a></li>
						<li id="blob" style="width: 0px; height: 0px; left: 0px; top: 0px; background-color: rgb(187, 187, 187); opacity: 1;"></li>
						<!--<li class="red"><a href="editarweb" class="sf-with-ul"> Editar webs <span class="sf-sub-indicator icon-right-open"></span></a></li>-->
					</ul>
					<a href="#" class="search_link"><span class="icon-search"></span></a>
					</nav>
					<!-- #main menu -->

					</div>
				</div>
			</div>
		<div id="header_middle_fixed"></div>
	</header>

	<!-- main -->
		<div id="main" class="with_sidebar right_sidebar">
		  <div id="main_inner" class="clearboth blog_style_excerpt">
		    <!-- content -->
		    <div id="content" class="content_blog" role="main" itemscope itemtype="http://schema.org/Blog">
    			@yield('contenido')
				</div>
			</div>
		</div>
		<!-- /main -->

	<!-- footer -->
	<footer id="footer" class="site_footer" role="contentinfo">
	<div id="footer_sidebar" class="widget_area theme_dark theme_article" role="complementary">
	  <div id="footer_sidebar_inner">
	    <!--logo and description -->
	    <aside class="widget widget_socials">
	      <div class="widget_inner">
	        <div class="logo logo_text"><a href="/">
	          <span class="logo_title theme_header">top<span class="theme_accent">web</span>meetings</span></a>
	        </div>
	        <div class="logo_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
	      </div>
	    </aside>
	    <!-- /logo and description -->
	    <!-- widget flickr -->
	    <aside class="widget widget_flickr">
	      <h3 class="widget_title theme_title">Flickr</h3>
	      <div class="flickr_images">
	        <a href="#"><img title="" alt="" src=""></a>
	      </div>
	    </aside>
	    <!-- widget #flickr -->
	    <!-- widget recent post -->
	    <aside class="widget widget_recent_entries widget-odd">
	      <h3 class="widget_title theme_title">Recent posts</h3>
	        <ul>
	          <li><a href=""></a></li>
	        </ul>
	    </aside>
	    <!-- #widget recent post -->
	    <!-- widget contact form -->
	    <aside class="widget widget_text">
	      <h3 class="widget_title theme_title">Contact form</h3>
	      <div class="textwidget">
	        <div class="sc_contact_form">
	          <form method="post">
	            <div class="field field_name"><input type="text" id="nombre" name="username" placeholder="Nombre"></div>
	            <div class="field field_email"><input type="text" id="emailFooter" name="email" value="<?php if(isset($_SESSION['email'])){ echo $email; }?>" <?php if(isset($_SESSION['email'])){ ?> readonly <?php } ?> placeholder="Email"></div>
	            <div class="field field_message"><textarea id="mensaje" name="message" placeholder="Mensaje"></textarea></div>
	            <button onclick="return contact()">Send</span></button>
	            <div class="resultado_contact"></div>
		          </form>
		        </div>
		      </div>
		    </aside>
		    <!-- #widget contact form -->
		  </div>
		</div>
		<!-- footer_copyright -->
		<div id="footer_copyright" class="theme_dark theme_article">
		  <div id="footer_copyright_inner" class="theme_text">
		    <a href="/">TopwebMeetings</a> &copy; 2018 All Rights Reserved
		  </div>
		</div>
		<!-- #footer_copyright -->
		  </footer>
		  <!-- #footer -->
		</div>

<script>
function centrar() {
    iz=(screen.width-document.body.clientWidth) / 2;
    de=(screen.height-document.body.clientHeight) / 2;
    moveTo(iz,de);
}
</script>
<!-- Login Acceder Form -->
<a href="#" id="toTop" class="theme_button icon-up-open-big"></a>
<div id="popup_login" class="popup_form">
    <div class="popup_body theme_article">
    <h4 class="popup_title">Login</h4>
      <form action="inicio" method="POST" name="login_form">
        <div class="popup_field"><input type="text" name="log" id="log" placeholder="Login*" /></div>
        <div class="popup_field"><input type="password" name="pwd" id="pwd" placeholder="Password*" /></div>
        <div class="popup_field popup_button"><input type="submit" name="acceder" class="theme_button" value="Login"></div>
        <div class="popup_field forgot_password">
          <a href="#">Forgot password?</a>
        </div>
      <div class="popup_field register">
        <a href="#">Register</a>
      </div>
    </form>
    </div>
</div>
<!-- /Login Acceder Form -->

<div id="popup_register" class="popup_form">
<div class="popup_body theme_article">
<h4 class="popup_title">¡Regístrate!</h4>
<div id="resultado_registrarse">HOLA </div>
  <form action="registration_user" method="post" name="register_form">
    <div class="popup_field"><input type="text" name="registration_username" id="registration_username" placeholder="Nombre (usuario)*" /></div>
    <div class="popup_field"><input type="text" name="registration_email" id="registration_email" placeholder="Email*" /></div>
    <div class="popup_field"><input type="password" name="registration_pwd" id="registration_pwd" placeholder="Contraseña*" /></div>
    <div class="popup_field"><input type="password" name="registration_pwd2" id="registration_pwd2" placeholder="Confirma contraseña*" /><br><br></div>
    <div class="popup_field theme_info registration_role"><h6>Política de privacidad:</h6>
    <input type="radio" name="registration_role" id="registration_role2" value="1" checked="nochecked" />
    <label class="lopd" for="registration_role2">He leído, entiendo y acepto la <a href="#">política de privacidad</a></label>
    </div>
    <div class="popup_field popup_button"><a onclick="return Registrarse()" href="#" class="theme_button">enviar</a></div>

  </form>
</div>
</div>

 <script type="text/javascript" src="/js/jquery/jquery.js"></script>
 <script type="text/javascript" src="/js/jquery/jquery-migrate.min.js?ver2=<?= date('Ymdhis') ?>"></script>
 <script type="text/javascript" src="/js/jquery/ui/jquery-ui-1.10.4.custom.js"></script>
 <script type="text/javascript" src="/js/jquery.cookie.js"></script>
 <script type="text/javascript" src="/js/jquery.easing.js"></script>
 <script type="text/javascript" src="/js/superfish.js"></script>
 <script type="text/javascript" src="/js/jquery.mobilemenu.min.js"></script>
 <script type="text/javascript" src="/js/jquery.slidemenu.js"></script>
 <script type="text/javascript" src="/js/skip-link-focus-fix.js"></script>
 <script type="text/javascript" src="/js/_utils.js"></script>
 <script type="text/javascript" src="/js/_googlemap_init.js"></script>
 <script type="text/javascript" src="/js/_front.js?ver=<?= date('Ymdhis') ?>"></script>
 <script type="text/javascript" src="/js/_reviews.js"></script>
 <script type="text/javascript" src="/js/prettyphoto/jquery.prettyPhoto.min.js?ver=no-compose"></script>
 <script type="text/javascript" src="/js/jquery.flexslider.min.js"></script>
 <script type="text/javascript" src="/js/mediaplayer/mediaelement-and-player.min.js"></script>
 <script type="text/javascript" src="/js/_contact_form.js"></script>
 <script type="text/javascript" src="/js/jquery/ui/jquery.ui.core.min.js"></script>
 <script type="text/javascript" src="/js/jquery/ui/jquery.ui.widget.min.js"></script>
 <script type="text/javascript" src="/js/jquery/ui/jquery.ui.mouse.min.js"></script>
 <script type="text/javascript" src="/js/jquery/ui/jquery.ui.draggable.min.js"></script>
</body>
</html>
