<?php include(dirname(__FILE__).'/header.php'); ?>

<article id="static-<?php echo $plxShow->staticId(); ?>" class="hentry clear">
	<div class="entry-wrap wrap clear">
		
		<header class="entry-header">
			<h1 class="entry-title"><?php $plxShow->staticTitle(); ?></h1>
		</header><!-- .entry-header -->

		<div class="static clear">
			<?php $plxShow->staticContent(); ?>	
		</div><!-- .entry-content -->

	</div><!-- .entry-wrap -->
</article><!-- #post-## -->

<?php include(dirname(__FILE__).'/footer.php'); ?>
