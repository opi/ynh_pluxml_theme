<?php if (!defined('PLX_ROOT')) exit; ?><!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
<meta charset="<?php $plxShow->charset('min'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />

<link rel="stylesheet" id="ryu-style-css" href="<?php $plxShow->template(); ?>/style.css?ver=3.8-beta-1" type="text/css" media="all" />

<?php $plxShow->templateCss() ?>
<?php $plxShow->pluginsCss() ?>
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
<!--[if lt IE 9]>
<script src="<?php $plxShow->template(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery.js?ver=1.10.2"></script>
<script type="text/javascript" src="<?php $plxShow->template(); ?>/js/jquery-migrate.min.js?ver=1.2.1"></script>

<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>

<?php include(dirname(__FILE__).'/body.php'); ?>

<div id="page" class="hfeed site">

    <?php include(dirname(__FILE__).'/sidebar.php'); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrap">			
			<h1 class="site-title">
				<a class="site-logo"  href="./" title="<?php $plxShow->mainTitle(''); ?>" rel="home">
					<img src="<?php $plxShow->template(); ?>/img/logo.png" width="120" height="120" alt="<?php $plxShow->subTitle(); ?>" class="no-grav header-image" />
				</a>
			</h1>
		</div><!-- .wrap -->
	</header><!-- #masthead -->
	
	<div id="main" class="site-main">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">	