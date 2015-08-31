<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?></title>
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="all" href="http://dogtor.pe/wp-content/themes/dogtor/css/style-ie.css"/>
	<![endif]-->
	<?php wp_head(); ?>

	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.less" />
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/queries.less" />
	<script src="<?php bloginfo('template_directory'); ?>/js/less-1.7.2.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=1474935379416341&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<header class="encabezado">
		<div class="box-top">
			<div class="container">
				<ul>
					<li class="redes">Síguenos: </li>
					<li class="redes"><a href="https://www.facebook.com/dogtorpe" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Facebook" title="Facebook"></a></li>
					<li class="redes"><a href="https://twitter.com/dogtorpe" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter" title="Twitter"></a></li>
					<li class="redes"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="YouTube" title="YouTube" target="_blank"></a></li>
					<li class="bot-registro">Registrarme</li>
					<li class="bot-login">Iniciar Sesión</li>
				</ul>
			</div>
		</div>
		<div class="box-bottom">
			<div class="container">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/dogtor-pe.png" alt=""></a>
				</div>
				<nav>
					<ul>
						<?php 
						wp_nav_menu( array(
							//'theme_location' => 'principal',
							'menu_class' => 'sf-menu',
							'menu_id' => ''
							));
						?>
					</ul>
				</nav>
			</div>
		</div>
	</header>