<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 
<?php wp_head();?>

</head>
<body <?php body_class();?>>


	<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <?php the_title("<h1 class='logo me-auto'><a href='".esc_url(get_permalink())."'>","<span>.</span></a></h1>")?>
     

      <nav id="navbar" class="navbar order-last order-lg-0">
        <?php  
			
			$arr = ['theme_location'=>'main-menu'];
			wp_nav_menu($arr);
		?>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>
    </div>
  </header>
 
 

