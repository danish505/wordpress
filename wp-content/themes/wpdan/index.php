<?php get_header();?>

<div id="primary" id="content-area">
 <main id="main" class="site-main">

 	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
		<?php get_template_part('template/content');?>

	<?php endwhile; else:?>

		<?php get_template_part('template/content');?>
	
	<?php endif;?>
 </main>
 <?php get_sidebar();?>

<?php get_footer();?>