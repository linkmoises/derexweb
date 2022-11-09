<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<!DOCTYPE html>
<html dir="ltr" lang="es-PA">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Derek Serrano" />

	<!-- Stylesheets
	============================================= -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand" rel="stylesheet">

  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/swiper.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/fonts.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/dark.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/font-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/magnific-popup.css" type="text/css" />

  <link rel="stylesheet" href="<?php bloginfo("url"); ?>/css/custom.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicons
	============================================= -->
  <link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico" sizes="any">
  <link rel="icon" href="<?php bloginfo('url'); ?>/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php bloginfo('url'); ?>/apple-touch-icon.png">
  <link rel="manifest" href="<?php bloginfo('url'); ?>/manifest.webmanifest">

  <!-- Document Title
  ============================================= -->
  <title>Derek Serrano <?php wp_title(); ?></title>

  <link rel='stylesheet' id='mkaz-code-syntax-prism-css-css'  href='https://derekserrano.com/wp-content/plugins/code-syntax-block/assets/prism-a11y-dark.css?ver=1666907352' type='text/css' media='all' />
  
</head>

<body class="stretched block-nav-header-4">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="<?php bloginfo('url'); ?>" class="standard-logo" data-dark-logo="<?php bloginfo('url'); ?>/images/logo-dark.png"><img src="<?php bloginfo('url'); ?>/images/logo.png" alt="Logo Derek Serrano Duarte"></a>
							<a href="<?php bloginfo('url'); ?>" class="retina-logo" data-dark-logo="<?php bloginfo('url'); ?>/images/logo-dark@2x.png"><img src="<?php bloginfo('url'); ?>/images/logo@2x.png" alt="Logo Derek Serrano Duarte"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<!--<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
										class="icon-line-cross"></i></a>
							</div>--><!-- #top-search end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100">
								<path
									d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
								</path>
								<path d="m 30,50 h 40"></path>
								<path
									d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
								</path>
							</svg>
						</div>

						<!-- Primary Navigation
								============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="button" href="<?php bloginfo('url'); ?>">
										<div>Inicio</div>
									</a>
								</li>
                <!--<li class="menu-item">
									<a class="menu-link" href="<?php bloginfo('url'); ?>/blog/">
										<div>Archivo</div>
									</a>
								</li>
								<li class="menu-item">
									<a href="<?php bloginfo('url'); ?>/programacion/" class="menu-link">
										<div>Coding</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="<?php bloginfo('url'); ?>/robotica/">
										<div>Robótica</div>
									</a>
								</li>-->
								<li class="menu-item">
									<a class="menu-link" href="<?php bloginfo('url'); ?>/sobre-mi/">
										<div>Sobre mí</div>
									</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Buscar..."
								autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->
