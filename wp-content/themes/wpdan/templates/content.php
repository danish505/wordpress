<article id="post-<?= the_ID(); ?>" <?php post_class();?>>
	<div class="entry-header">
		<?php the_title('<h1>','</h1>') ?>
	</div>
	<div class="entry-content">
		<p><?php the_content();?></p>
	</div>
	</article>