<article id="post-<?= the_ID(); ?>" <?php post_class();?>>
	<div class="entry-header">
		<h1><?php esc_html_e('404','wpdan');?></h1>
	</div>
	<div class="entry-content">
		<p><?php esc_html__( 'Sorry no content found', 'wpdan' );?></p>
	</div>
	</article>