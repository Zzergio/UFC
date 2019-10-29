<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130406811-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130406811-3');
</script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<?php wp_head(); ?>
</head>
<body>

	<header class="header">
		<div class="logo"><span class="logo"><a href="/">UFC.pp.ua</a></span></div>
		<div class="slogan"><p>• UNDER FOOTBALL COVER •</p></div>
		<div class="donate-social">
			<div class="donate">
				<button class="donate">Donate!</button>
			</div>
			<div class="social">
				<a href="https://www.facebook.com/pg/106453067447398"><i class="fab fa-facebook-f"></i></a>
				<a href="https://t.me/ufcppua"><i class="fab fa-telegram-plane"></i></a>
				<a href=""><i class="fab fa-twitter" id="last-icon"></i></a> 
			</div>
		</div>
	</header>

	<!-- NAV -->

	<div class="wrap">
	<nav class="main-menu">
		<div class="menu">
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
				<? wp_nav_menu(array(
							'menu' => 'nav',
							'menu_class' => 'nav'
						)); 
				?>
		</div>
	</nav>
</div>

<div class="container">