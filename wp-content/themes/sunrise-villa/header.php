<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<header id="header">
	<div class="wrap">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="/wp-content/themes/sunrise-villa/assets/img/logo.jpg">
			</a>
		</div>
		<div class="menu">
			<?php wp_nav_menu(array('menu' => 'Main')); ?>
		</div>
		<div class="menu-button">
			<i class="fa fa-bars"></i>
		</div>
	</div>
</header>
