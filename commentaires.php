<?php if(!defined('PLX_ROOT')) exit; ?>

<div id="comments" class="comments-area">

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>
	<div class="comments-wrap wrap">

					<h2 class="comments-title">&ldquo;<span><?php echo $plxShow->artNbCom(); ?></span>&rdquo;</h2>

			
			<ol class="comment-list">
			
	<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
	<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-<?php $plxShow->comId(); ?>">
		<article id="comment-<?php $plxShow->comId(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<span class="comment-author-avatar"><img alt="gravatar" src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5( strtolower($plxShow->plxMotor->plxRecord_coms->f('mail')) ) ?>&default=http://www.gravatar.com/avatar/3b3be63a4c2a439b013787725dfce802.jpgG&amp;r=G" class="avatar avatar-48 photo" height="48" width="48" /></span>
					<cite class="fn genericon"><a class="num-com" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a> <a href="" rel="external nofollow" class="url"><?php $plxShow->comAuthor('link'); ?></a></cite> <span class="says"><?php $plxShow->lang('SAID'); ?>:</span>
				</div><!-- .comment-author .vcard -->
			</footer>

			<div class="comment-content">
				<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
		    </div>

			<div class="comment-meta commentmetadata">
				 <a href="<?php $plxShow->ComUrl(); ?>" rel="bookmark">
			    <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_dayT#hour:#minute'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(2)'); ?></time></a>										
		    </div><!-- .comment-meta .commentmetadata -->
		</article><!-- #comment-## -->

	</li><!-- #comment-## -->
	<?php endwhile; # Fin de la boucle sur les commentaires ?>
	
			</ol><!-- .comment-list -->	
		
    <?php endif; ?>			



	
	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>		
	<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title"><?php $plxShow->lang('WRITE_A_COMMENT') ?></h3>
	
	<div id="form">			
	<form action="<?php $plxShow->artUrl(); ?>#form" method="post" id="commentform" class="comment-form">
	
	<p class="comment-notes"><?php $plxShow->comMessage(); ?></p>
	
	<p class="comment-form-author">
					<label for="id_name"><?php $plxShow->lang('NAME') ?> :</label>
					<input id="id_name" name="name" type="text" size="30" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" />
	</p>
    <p class="comment-form-email">
					<label for="id_mail"><?php $plxShow->lang('EMAIL') ?> :</label>
					<input id="id_mail" name="mail" type="text" size="30" value="<?php $plxShow->comGet('mail',''); ?>" />
    </p>
    <p class="comment-form-url">
					<label for="id_site"><?php $plxShow->lang('WEBSITE') ?> :</label>
					<input id="id_site" name="site" type="text" size="30" value="<?php $plxShow->comGet('site',''); ?>" />
    </p>
	<p class="comment-form-comment">
					<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?> :</label>
					<textarea id="id_content" name="content" cols="45" rows="8"><?php $plxShow->comGet('content',''); ?></textarea>
	</p>						
	<?php if($plxShow->plxMotor->aConf['capcha']): ?>
	<p>
					<label for="id_rep"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></label>
					<?php $plxShow->capchaQ(); ?> :
					<input id="id_rep" name="rep" type="text" size="2" maxlength="1" />
	</p>
	<?php endif; ?>							
	<p class="form-submit">
					<input name="submit" type="submit" id="submit" value="<?php $plxShow->lang('SEND') ?>" />
	</p>
	</form>
	</div><!-- #form -->
	</div><!-- #respond -->
			
	</div><!-- .comments-wrap -->
	
	<?php else: ?>

		<p class="no-comments"><?php $plxShow->lang('COMMENTS_CLOSED') ?>.</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>	
</div><!-- #comments -->			

