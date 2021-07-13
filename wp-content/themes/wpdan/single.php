<?php get_header();?>

<article id="post-<?= the_ID(); ?>" <?php post_class();?>>

		 
	<div class="entry-header">
		<span class="dashicons dashicons-format-<?php echo get_post_format($post->ID);?>"></span>
		<?php the_title('<h1>','</h1>') ?>
	</div>
	<div class="entry-content">
		<p><?php the_content();?></p>
	</div>
	<p>Single.php</p>


	<?php  if(comments_open()):?>

		<?php comments_template();?>

	<?php endif;?>

	</article>


	<?php get_sidebar();?>

<?php get_footer();?>