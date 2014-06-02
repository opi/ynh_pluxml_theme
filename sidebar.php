<?php if(!defined('PLX_ROOT')) exit; ?>

		<div id="widgets-wrapper" class="toppanel hide">
		<div id="secondary" role="complementary" class="wrap clear four">
		
		<div id="top-sidebar-one" class="widget-area" role="complementary">
		<aside class="widget widget_recent_entries">
		<h1 class="widget-title"><?php $plxShow->lang('LATEST_ARTICLES'); ?></h1>
		    <ul>
			    <?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
			</ul>
	    </aside>
	   
		<aside class="widget widget_tag_cloud">
		<h1 class="widget-title"><?php $plxShow->lang('TAGS'); ?></h1>		
	        <div>
			   <?php $plxShow->tagList('<a class="tag #tag_size #tag_status" href="#tag_url" title="#tag_name">#tag_name</a>, ', 20, 'random'); ?>
		    </div>
        </aside>	
        </div><!-- #first .widget-area -->
	
	
	
		<div id="top-sidebar-two" class="widget-area" role="complementary">
		<aside class="widget widget_recent_comments">
		<h1 class="widget-title"><?php $plxShow->lang('LATEST_COMMENTS'); ?></h1>
        		<ul id="recentcomments">
        		     <?php $plxShow->lastComList('<li class="recentcomments">#com_author '.$plxShow->getLang('SAID').' <a href="#com_url" rel="external nofollow" class="url">#com_content(34)</a></li>',4); ?>
        		</ul>
		</aside>
		
		<aside class="widget widget_archive">
		<h1 class="widget-title"><?php $plxShow->lang('ARCHIVES'); ?></h1>		
	    <ul>
			<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
		</ul>
        </aside>			
		</div><!-- #second .widget-area -->
	
	
	
		<div id="top-sidebar-three" class="widget-area" role="complementary">
		<aside class="widget widget_categories">
		<h1 class="widget-title"><?php $plxShow->lang('CATEGORIES'); ?></h1>
        		<ul>
        		    <?php $plxShow->catList('','<li class="cat-item" id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>		
        		</ul>
        </aside> 
        
 		<aside class="widget widget_links">
		<h1 class="widget-title">Liens</h1>		
	    <ul>
			<li><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a></li>
			<li><?php $plxShow->lang('DESIGNED_BY'); ?></li>
			<li><?php $plxShow->lang('ADAPTED_BY'); ?></li>
		</ul>
        </aside>             	
        </div><!-- #third .widget-area -->


	
        <div id="top-sidebar-four" class="widget-area" role="complementary">
		<aside class="widget widget_links">
		<h1 class="widget-title">Menu</h1>
	            <ul class='xoxo blogroll'>
			        <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li class="cat-item" id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			        <?php $plxShow->pageBlog('<li class="cat-item" id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>

	            </ul>
        </aside>  
        
 		<aside class="widget widget_rss">
		<h1 class="widget-title">Abonnement</h1>		
	    <ul>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
			<?php $plxShow->lang('ARTICLES'); ?></a></li>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
			<?php $plxShow->lang('COMMENTS'); ?></a></li>
		</ul>
        </aside>              
	    </div><!-- #four .widget-area -->
	
	
	</div><!-- #secondary -->
	</div><!-- #widgets-wrapper -->
	
	<div id="social-links-wrapper" class="toppanel hide">
		<ul class="social-links clear">
			<li class="email-link">
				<a href="mailto:s&#117;&#112;p&#111;r&#116;&#64;&#119;o&#114;&#100;pre&#115;&#115;.&#99;om" class="genericon" title="Email" target="_blank">
					<span class="screen-reader-text">Email</span>
				</a>
			</li>			
			<li class="twitter-link">
				<a href="http://twitter.com" class="genericon" title="Twitter" target="_blank">
					<span class="screen-reader-text">Twitter</span>
				</a>
			</li>			
			<li class="facebook-link">
				<a href="http://facebook.com" class="genericon" title="Facebook" target="_blank">
					<span class="screen-reader-text">Facebook</span>
				</a>
			</li>			
			<li class="pinterest-link">
				<a href="http://pinterest.com" class="genericon" title="Pinterest" target="_blank">
					<span class="screen-reader-text">Pinterest</span>
				</a>
			</li>			
			<li class="google-link">
				<a href="http://plus.google.com" class="genericon" title="Google Plus" target="_blank">
					<span class="screen-reader-text">Google Plus</span>
				</a>
			</li>			
			<li class="linkedin-link">
				<a href="http://linkedin.com" class="genericon" title="LinkedIn" target="_blank">
					<span class="screen-reader-text">LinkedIn</span>
				</a>
			</li>			
		    <li class="flickr-link">
				<a href="http://flickr.com" class="genericon" title="Flickr" target="_blank">
					<span class="screen-reader-text">Flickr</span>
				</a>
			</li>			
			<li class="github-link">
				<a href="http://github.com" class="genericon" title="Github" target="_blank">
					<span class="screen-reader-text">Github</span>
				</a>
			</li>			
			<li class="dribbble-link">
				<a href="http://dribbble.com" class="genericon" title="Dribbble" target="_blank">
					<span class="screen-reader-text">Dribbble</span>
				</a>
			</li>			
			<li class="vimeo-link">
				<a href="http://vimeo.com" class="genericon" title="Vimeo" target="_blank">
					<span class="screen-reader-text">Vimeo</span>
				</a>
			</li>
			<li class="youtube-link">
				<a href="http://youtube.com" class="genericon" title="YouTube" target="_blank">
					<span class="screen-reader-text">YouTube</span>
				</a>
			</li>	
			<li class="tumblr-link">
				<a href="http://tumblr.com" class="genericon" title="Tumblr" target="_blank">
					<span class="screen-reader-text">Tumblr</span>
				</a>
			</li>
	</ul>
	</div>
		
	<div id="search-wrapper" class="toppanel hide">		
      <form method="get" id="searchform" class="searchform" action="#" role="search">
	    <label for="s" class="screen-reader-text">Recherche</label>
	    <input type="search" class="field" name="s" value="" id="s" placeholder="Rechercher &hellip;" />
	    <input type="submit" class="submit" id="searchsubmit" value="Rechercher" />
      </form>	
    </div>
	