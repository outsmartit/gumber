<?php
defined('_JEXEC') or die;
/* =====================================================================
  Gumber Template: Based on Gumby Framework 2.6, Adapted for Joomla
  Author:   Diederik
  Version:  1.0
  Created:  January 2015
  Copyright:  Outsmartit.be - (C) 2015 - All rights reserved
  Licenses: GNU/GPL v3 or later http://www.gnu.org/licenses/gpl-3.0.html
  /* ===================================================================== */

// Load template parameters

$app = JFactory::getApplication();
$params = $app->getTemplate(true)->params;
$logo = $params->get('logo');
$customCSS = $params->get('customCSS');
?>
<!DOCTYPE html>
<!--[if IE 8]>
        <html class="no-js lt-ie9" lang="en" > 
<![endif]-->
<!--[if gt IE 8]>
<!--> <html class="no-js" lang="en" > <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/gumby.css" />
    <?php if ($customCSS != -1) : ?>
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $customCSS ?>" />
    <?php endif; ?>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jquery-2.0.2.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/modernizr-2.6.2.min.js"></script>
    <title><?php echo htmlspecialchars($params->get('sitetitle')); ?></title>
</head>
<body>
    <div class="row">
        <div class="navbar" id="nav1" gumby-fixed="top">
            <a class="toggle" gumby-trigger="#nav1 >div > ul" href="#"><i class="icon-menu"></i></a>
            <h1 class="four columns logo">
                <?php if ($logo) : ?>
                    <img src="<?php echo $this->baseurl; ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($params->get('sitetitle')); ?>" />
                <?php else : ?>
                    <?php echo htmlspecialchars($params->get('sitetitle')); ?>
                <?php endif; ?>
            </h1>
            <div class="eight columns" style="margin-left:0;"> 
                <?php $module = & JModuleHelper::getModule('menu'); ?>
                <?php echo JModuleHelper::renderModule($module); ?>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="six columns">
            <img src="../images/bodrumheader.jpg"/></div>
        <div class="six columns">
            <?php echo "<h2>Ooops,</h2> something went wrong.<br />  Please use the menu for correct navigation."; ?>
        </div>
    </div>

    <div class="footer-row">
        <div class="wrapper">
            <footer class="row">
                <div class="moduletable twelve columns text-right">
                    <?php $module1 = JModuleHelper::getModule('custom', 'footer'); ?>
                    <?php echo JModuleHelper::renderModule($module1); ?>
                </div>
            </footer>
        </div>
    </div>
    <div class="row text-center">
        <small>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($params->get('sitetitle')); ?></small>
    </div>
    
    <script gumby-touch="js/libs" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/gumby.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby.fixed.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby.skiplink.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby.toggleswitch.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby.tabs.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby.radiobtn.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby.checkbox.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby.navbar.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/jquery.validation.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/gumby.images.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/gumby.init.js"></script>
</body>
</html>
