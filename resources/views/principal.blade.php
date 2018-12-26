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
</head>
<body class="theme_regular puzzles_heavy reviews_5 puzzles_animations wide no-js" data-puzzlestyle="heavy">
<div id="page" class="theme_body">
		<header role="banner">
			<div id="header_top">
				<div class="top_line theme_accent_bg"></div>
				<div id="header_top_inner">
					<div id="login_area">

					<!-- Logo -->
					<div class="logo logo_text">
						<a href="index.html">
							<span class="logo_title theme_header">Top<span class="theme_accent">web</span>meetings</span><span class="logo_slogan theme_info"></span>
						</a>
					</div>
					<!-- /Logo -->
				</div>
   		</div>
			<div id="header_middle_wrapper">
				<div id="header_middle"  >
					<div id="header_middle_inner">
						<div class="search_form_area theme_body">
							<form class="search_form" action="#" method="get"><input class="search_field" type="search" placeholder="Type your search query and press 'Enter' ..." value="" name="s"></form>
							<a href="#" class="search_close"><span class="icon-cancel-circled"></span></a>
						</div>
						<?php
					  //	include ('pages/search.php');
						//	include ('pages/menu.php');
						?>
						</div>
					</div>
				</div>
			<div id="header_middle_fixed"></div>
		</header>

    @yield('content')
