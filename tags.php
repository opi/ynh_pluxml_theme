<?php include(dirname(__FILE__).'/header.php'); ?>

			<header class="page-header">
				<div class="wrap">
					<h1 class="page-title"><?php echo $plxShow->plxMotor->cible; ?></h1>
					<em><?php $plxShow->tagFeed() ?></em>
				</div>
			</header><!-- .page-header -->

<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
<article id="post-<?php echo $plxShow->artId(); ?>" class="format-standard hentry clear">
	<div class="entry-wrap wrap clear">
		
		<header class="entry-header">
			<span class="categories-links"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?></span>
			<h1 class="entry-title"><?php $plxShow->artTitle('link'); ?></h1>
		</header><!-- .entry-header -->

		<footer class="entry-meta">
			<span class="entry-date">
			    <a href="<?php $plxShow->artUrl(''); ?>" rel="bookmark">
			    <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_dayT#hour:#minute'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(2)'); ?></time></a>
			</span>
			<span class="author vcard">
			   <a href="<?php $plxShow->artUrl(''); ?>" rel="author">
			    <?php $plxShow->artAuthor() ?>
			   </a>
			</span>
			<span class="tags-links">
			    <?php $plxShow->artTags(); ?>
			</span>	
			<span class="comments-link">
			    <?php $plxShow->artNbCom(); ?>
			</span>		
		</footer><!-- .entry-meta -->

		<div class="entry-content clear">
            <?php $plxShow->artChapo('<p class="more"><a href="#art_url" title="#art_title">Lire la suite →</a></p>'); ?>
		</div><!-- .entry-content -->
		
		<span class="entry-format-badge genericon"><span class="screen-reader-text">Standard</span></span>
	</div><!-- .entry-wrap -->
</article><!-- #post-## -->
<?php endwhile; ?>

	<nav role="navigation" id="nav-below" class="navigation-post double">
		<div class="wrap clear">
			<h1 class="screen-reader-text">Pagination</h1>
		    <?php $plxShow->pagination(); ?>	
		</div>
	</nav><!-- #nav-below -->

<?php include(dirname(__FILE__).'/footer.php'); ?>
