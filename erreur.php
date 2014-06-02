<?php include(dirname(__FILE__).'/header.php'); ?>

			<article id="post-0" class="post error404 not-found">
				<div class="entry-wrap wrap clear">
					<header class="entry-header">
						<h1 class="entry-title"><?php $plxShow->lang('ERROR'); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content clear">
						<p><?php $plxShow->erreurMessage(); ?></p>
					</div><!-- .entry-content -->
				</div><!-- .entry-wrap -->
			</article><!-- #post-0 .post .error404 .not-found -->

<?php include(dirname(__FILE__).'/footer.php'); ?>
