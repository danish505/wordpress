<article id="post-<?= the_ID(); ?>" <?php post_class();?>>
	<div class="entry-header">
		<?php the_title('<h1>','</h1>') ?>
		<?php the_author_posts_link();?>
	</div>
	<div class="entry-content">
		<p><?php the_content();?></p>
	<p>Singular.php</p>
	</div>

	</article>