<?php if (!defined('PLX_ROOT')) exit; ?>

<?php if($plxShow->plxMotor->mode == "home"): ?>
<body class="home blog neverending">
<?php endif; ?>

<?php if($plxShow->plxMotor->mode == "article" || $plxShow->plxMotor->mode == "static"): ?>
<body class="single single-post single-format-standard">
<?php endif; ?>

<?php if($plxShow->plxMotor->mode == "archives" || $plxShow->plxMotor->mode == "categorie" || $plxShow->plxMotor->mode == "tags"): ?>
<body class="archive category <?php strtolower(plxUtils::removeAccents($plxShow->catName(),PLX_CHARSET)); ?>">
<?php endif; ?>

<?php if($plxShow->plxMotor->mode == "erreur"): ?>
<body class="error404">
<?php endif; ?>
