<?php get_header();?>

<div id="primary" id="content-area">
 <main id="main" class="site-main">

 	<?php the_title("<h2><a href='". esc_url(get_permalink())."'></a>","</h2>");?>

 	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
		<?php get_template_part('template/content');?>

	<?php endwhile; else:?>

		<?php get_template_part('template/content');?>
	
	<?php endif;?>

	<?php the_excerpt();?>

	<?php paginate_links(); ?>

	<p>home.php</p>
 </main>
 <?php get_sidebar();?>

<?php get_footer();?>