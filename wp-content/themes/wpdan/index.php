<?php get_header();?>

<div id="primary" id="content-area">
 <main id="main" class="site-main">
	<article id="post-<?= the_ID(); ?>" <?php post_class();?>>
	<div class="entry-header">
		<h1>Header</h1>
	</div>
	<div class="entry-content">
		<p>Entry Body</p>
	</div>
	</article>
 </main>
 <?php get_sidebar();?>
<?php get_footer();?>