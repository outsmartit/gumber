<?php
defined('_JEXEC') or die;
/* =====================================================================
  Gumber Template: Based on Gumby Framework 2.6  Adapted for Joomla
  Author:   Diederik
  Version:  1.0
  Created:  January 2015
  Copyright:  Outsmartit.be - (C) 2015 - All rights reserved
  Licenses: GNU/GPL v3 or later http://www.gnu.org/licenses/gpl-3.0.html
  /* ===================================================================== */

// Load template parameters
include_once JPATH_THEMES . '/' . $this->template . '/getparams.php';
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
    <link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/gumby.css" />
       <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/gumberstyle.css" />
        <?php if ($customCSS != -1) : ?>
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $customCSS ?>" />
    <?php endif; ?>

    <?php
    JHtml::_('jquery.framework');
    $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/libs/modernizr-2.6.2.min.js'); 
    ?>
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php if ($setWidth != $defaultWidth) : ?>
        <style>
            .row, .navwraper, .navbar{
                max-width: <?php echo $setWidth ?><?php echo $widthUnit ?>;

            }
        </style>
    <?php endif; ?>
</head>
<body class="<?php
if ($active) : echo $active->alias;
endif;
?>">
          <?php if ($this->countModules('nav')) : ?>
        <div class="row">
            <div class="push_eight four columns text-right" style="height :20px"> 
                <jdoc:include type="modules" name="lang-sel" style="" />
            </div>
            <div class="navwraper">    
                <div class="navbar" id="nav1" <?php if ($stickyTopMenu) echo 'gumby-fixed="top"'; ?> >
                    <a class="toggle" gumby-trigger="#nav1 >div > ul" href="#"><i class="icon-menu"></i></a>
                    <h1 class="three columns logo">
                        <?php if ($logo) : ?>
                            <img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" 
                                 alt="<?php echo htmlspecialchars($sitetitle); ?>"/>
                             <?php else : ?> 
                                 <?php echo $site_id; ?>
                             <?php endif; ?>
                    </h1>
                    <div class="eight columns"> 
                        <jdoc:include type="modules" name="nav" style="" />
                    </div>

                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('top')) : ?>
        <div class="top-row">
            <div class="wrapper">
                <section class="myrow"><!--change Diederik -->
                    <!--toprow-->
                    <jdoc:include type="modules" name="top" style="gumber" />
                </section>
            </div>
        </div>  
    <?php endif; ?>

    <?php if ($this->countModules('above')) : ?>
        <div class="above-row">
            <div class="wrapper">  
                <section class="row">
                    <!--aboverow-->
                    <jdoc:include type="modules" name="above" style="gumber" />
                </section>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <!--mainrow-->
        <?php if ($this->countModules('left')) : ?>
            <section class="<?php echo $leftWidth ?> columns sidebar">
                <!--left-row-->
                <jdoc:include type="modules" name="left" style="gumber" />
            </section>
        <?php endif; ?>
        <div class="<?php echo $mainwidth ?> columns">
            <!--mainrow-->
            <?php if ($this->countModules('above-content')) : ?>
                <div class="above-content">
                    <!--above-content-->
                    <div class="row">
                    <jdoc:include type="modules" name="above-content" style="gumber" />
                    </div>
                </div>
            <?php endif; ?>            

            <?php if ($this->countModules('breadcrumbs')) : ?>
                <div class="breadcrumbs-row">
                    <div class="wrapper">
                        <div class="row">
                            <jdoc:include type="modules" name="breadcrumbs" style="none" />
                        </div>
                    </div>
                </div>
            <?php endif; ?> 
            <div class="row">
            <jdoc:include type="message" />  
            <jdoc:include type="component" />
            </div>
            <?php if ($this->countModules('below-content')) : ?>
                <section class="below-content">
                    <!--below-content-->
                    <jdoc:include type="modules" name="below-content" style="gumber" />
                </section>
            <?php endif; ?>
        </div>
        <?php if ($this->countModules('right')) : ?>
            <section class="<?php echo $rightWidth ?> columns sidebar">
                <!--right-row-->
                <jdoc:include type="modules" name="right" style="gumber" />
            </section>
        <?php endif; ?>
    </div>

    <?php if ($this->countModules('below')) : ?>
        <div class="below-row">
            <div class="wrapper">
                <section class="row">
                    <!--belowrow-->
                    <jdoc:include type="modules" name="below" style="gumber" />
                </section>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('bottom')) : ?>
        <div class="bottom-row">
            <div class="wrapper">
                <section class="row">
                    <!--bottomrow-->
                    <jdoc:include type="modules" name="bottom" style="gumber" />
                </section>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($this->countModules('footer')) : ?>
        <div class="footer-row">
            <div class="wrapper">
                <footer class="row">
                    <!--footerrow-->
                    <jdoc:include type="modules" name="footer" style="gumber" />
                </footer>
            </div>
        </div>
    <?php endif; ?>

    <!-- Credit Row Taken from https://github.com/nternetinspired/OneWeb -->         
    <footer class="row">
        <div class="ten columns text-left">
        <?php if ($social > 0) : ?>

            <ul class="social">
                <?php if ($twitterLink != "") : ?>
                    <li><a class="twitter" href="<?php echo ($twitterLink); ?>" title="<?php echo JText::_('TPL_GUMBER_TWITTER_LABEL'); ?>" target="_blank"><i class="icon-twitter large"></i></a></li>
                <?php endif; ?>
                <?php if ($facebookLink != "") : ?>
                    <li><a class="facebook" href="<?php echo ($facebookLink); ?>" title="<?php echo JText::_('TPL_GUMBER_FACEBOOK_LABEL'); ?>" target="_blank"><i class="icon-facebook large"></i></a></li>
                <?php endif; ?>
                <?php if ($googleplusLink != "") : ?>
                    <li><a class="googleplus" href="<?php echo ($googleplusLink); ?>" title="<?php echo JText::_('TPL_GUMBER_GOOGLEPLUS_LABEL'); ?>" target="_blank"><i class="icon-gplus large"></i></a></li>
                <?php endif; ?>
                <?php if ($instagramLink != "") : ?>
                    <li><a class="instagram" href="<?php echo ($instagramLink); ?>" title="<?php echo JText::_('TPL_GUMBER_INSTAGRAM_LABEL'); ?>" target="_blank"><i class="icon-instagram large"></i></a></li>
                <?php endif; ?>
                <?php if ($pinterestLink != "") : ?>
                    <li><a class="instagram" href="<?php echo ($pinterestLink); ?>" title="<?php echo JText::_('TPL_GUMBER_PINTEREST_LABEL'); ?>" target="_blank"><i class="icon-pinterest large"></i></a></li>
                <?php endif; ?>
                <?php if ($linkedinLink != "") : ?>
                    <li><a href="<?php echo ($linkedinLink); ?>" title="<?php echo JText::_('TPL_GUMBER_LINKEDIN_LABEL'); ?>" target="_blank"><i class="icon-linkedin large"></i></a></li>
                <?php endif; ?>
                <?php if ($dribbbleLink != "") : ?>
                    <li><a class="dribbble" href="<?php echo ($dribbbleLink); ?>" title="<?php echo JText::_('TPL_GUMBER_DRIBBBLE_LABEL'); ?>" target="_blank"><i class="icon-dribbble large"></i></a></li>
                <?php endif; ?>
                <?php if ($githubLink != "") : ?>
                    <li><a class="github" href="<?php echo ($githubLink); ?>" title="<?php echo JText::_('TPL_GUMBER_GITHUB_LABEL'); ?>" target="_blank"><i class="icon-github large"></i></a></li>
                <?php endif; ?>
            </ul>

        <?php endif; ?>
        </div>
        <div class="two columns text-right">
            <a href="#top"class="backtotop"><?php echo JText::_('TPL_GUMBER_BACKTOTOP') ?></a>
        </div>
        <div class="twelve columns text-center">
            <small>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></small>
        </div>


    </footer>
    <!-- end of credit row -->
    
    <script gumby-touch="js/libs" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/gumby.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/jquery.validation.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/gumby.images.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/gumby.init.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/ui/gumby-all.min.js"></script>
     <?php  // $doc->addScript($this->baseurl. '/templates/' . $this->template . '/js/libs/ui/gumby-all.min.js'); 
     ?>

<!--[if lte IE 8]>  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/respond.js"></script> <![endif]-->

    <?php if ($analytics != "UA-XXXXX-X") : ?>

        <script>
            var _gaq = [['_setAccount', '<?php echo htmlspecialchars($analytics); ?>'], ["_trackPageview"]];
            (function (d, t) {
                var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                g.async = 1;
                g.src = ("https:" == location.protocol ? "//ssl" : "//www") + ".google-analytics.com/ga.js";
                s.parentNode.insertBefore(g, s)
            }(document, "script"));
        </script>
    <?php endif; ?>
    <noscript>JavaScript is unavailable or disabled; so you are probably going to miss out on a few things. Everything should still work, but with a little less pzazz!</noscript>

</body>
</html>
