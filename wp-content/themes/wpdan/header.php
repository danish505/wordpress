<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
		<?php esc_html_e( 'Skip to Content', 'wpdan' ); ?>
</div>
<header id="masthead" class="site-header">
	
	<div class="site-branding">
		<div class="site-title">
			<a href="<?php  echo esc_url(home_url('/')); ?>">
			<p class="site-title"><?php bloginfo('name');?></p>
			</a>
		</div>
		<div class="site-description">
			<p><?php bloginfo('description'); ?></p>
		</div>
	</div>
	<nav id="site-navigation" class="main-navigation">

		<?php  
			
			$arr = ['theme_location'=>'main-menu'];
			wp_nav_menu($arr);
		?>
		
	</nav>
<header>