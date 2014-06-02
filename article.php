<?php include(dirname(__FILE__).'/header.php'); ?>
<article id="post-<?php echo $plxShow->artId(); ?>" class="status-publish format-standard hentry clear">
	<div class="entry-wrap wrap clear">
		
		<header class="entry-header">
			<!-- <span class="categories-links"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?></span> -->
			<h1 class="entry-title"><?php $plxShow->artTitle(''); ?></h1>
		</header><!-- .entry-header -->

		<footer class="entry-meta">
			<span class="entry-date">
			    <a href="<?php $plxShow->artUrl(''); ?>" rel="bookmark">
			    <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_dayT#hour:#minute'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time></a>
			</span>
			<span class="author vcard">
			     <a class="url fn n" href="#" title="View all posts by Theme Admin" rel="author"><?php $plxShow->artAuthor() ?></a>
			</span>
			<span class="tags-links">
			    <?php $plxShow->artTags(); ?>
			</span>				
			<span class="comments-link">
			     <?php $plxShow->artNbCom(); ?>
			</span>			
		</footer><!-- .entry-meta -->

		<div class="entry-content clear">
			<?php $plxShow->artContent(); ?>	
		</div><!-- .entry-content -->
		
	</div><!-- .entry-wrap -->
</article><!-- #post-## -->
	
<?php include(dirname(__FILE__).'/commentaires.php'); ?>			


<?php include(dirname(__FILE__).'/footer.php'); ?>
