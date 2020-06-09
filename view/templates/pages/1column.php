<?php
/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/* @var $this \CrazyCat\Framework\App\Component\Theme\Page */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= getLangCode(); ?>" lang="<?= getLangCode(); ?>">
<head>
    <title><?= htmlEscape($this->getPageTitle()); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" value="<?= htmlEscape($this->getMetaKeywords()); ?>"/>
    <meta name="description" value="<?= htmlEscape($this->getMetaDescription()); ?>"/>
    <meta name="robots" value="<?= htmlEscape($this->getMetaRobots()); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="<?= $this->getThemeUrl('images/favicon.ico'); ?>" type="image/x-icon"/>
    <?= $this->getCssScripts(); ?>
    <?= $this->getSectionHtml('head'); ?>
</head>
<body class="one-column <?= $this->getLayoutName('-') ?>">
<div class="header-wrapper wrapper">
    <div class="header">
        <?= $this->getSectionHtml('header'); ?>
    </div>
</div>
<div class="main-wrapper wrapper">
    <div class="main">
        <?= $this->getSectionHtml('messages'); ?>
        <?= $this->getSectionHtml('main'); ?>
    </div>
</div>
<div class="footer-wrapper wrapper">
    <div class="footer">
        <?= $this->getSectionHtml('footer'); ?>
    </div>
</div>
</body>
</html>