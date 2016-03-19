<?php

defined('_JEXEC') or die;
/* =====================================================================
  Template: Gumber - based on Gumby Framework 2.6
  Author:   Diederik
  Version:  1.0
  Created:  January 2015
  Copyright:  www.outsmartit.be - (C) 2015 - All rights reserved
  Licenses: GNU/GPL v3 or later http://www.gnu.org/licenses/gpl-3.0.html
  DBAD License http://philsturgeon.co.uk/code/dbad-license
  Credits: Code taken from the following:
  Seth Warburton  - https://github.com/nternetinspired/OneWeb
  Antony Doyle    - https://github.com/antonydoyle/siegeengine2
  /* ===================================================================== */
// Define shortcuts for template parameters
$load_jquery = $this->params->get('loadJQuery');
$loadMoo = $this->params->get('loadMoo');
$setGeneratorTag = $this->params->get('setGeneratorTag');
$analytics = $this->params->get('analytics');
$customCSS = $this->params->get('customCSS');
$defaultWidth='1024';
$setWidth = $this->params->get('setWidth');
$widthUnit = $this->params->get('widthUnit');
$topbarTitle = $this->params->get('topbarTitle');
$stickyTopMenu = $this->params->get('stickyTopMenu');
$unsetBootstrap = $this->params->get('unsetBootstrap');
$googleWebFonts = $this->params->get('googleWebFonts');

$twitterLink = $this->params->get('twitterLink');
$dribbbleLink = $this->params->get('dribbbleLink');
$facebookLink = $this->params->get('facebookLink');
$googleplusLink = $this->params->get('googleplusLink');
$githubLink = $this->params->get('githubLink');
$linkedinLink = $this->params->get('linkedinLink');
$pinterestLink = $this->params->get('pinterestLink');
$instagramLink = $this->params->get('instagramLink');
$youtubeLink = $this->params->get('youtubeLink');
$TopMenuWidth = $this->params->get('TopMenuWidth');
$logo = $this->params->get('logo');
$sitetitle = $this->params->get('sitetitle');
$active = JFactory::getApplication()->getMenu()->getActive();

$topmenu = ($stickyTopMenu ? 1 : 0) + ($TopMenuWidth ? 1 : 0);
$fixed = "";
$ctg = "";
/*
if ($stickyTopMenu == 1) {
    $fixed = "fixed";
}*/
if ($TopMenuWidth == 1) {
    $ctg = "contain-to-grid";
}

// Do we have social links?
$social = ($twitterLink ? 1 : 0) + ($dribbbleLink ? 1 : 0) + ($linkedinLink ? 1:0) + ($facebookLink ? 1 : 0) + ($googleplusLink ? 1 : 0) + ($githubLink ? 1 : 0);

if ($this->countModules('right') == 0) {
    $rightwidth = 0;
} else {
    $rightwidth = (int) ($this->params->get('rightwidth'));
}
if ($this->countModules('left') == 0) {
    $leftwidth = 0;
} else {
    $leftwidth = (int) ($this->params->get('leftwidth'));
}

$colcount = $rightwidth + $leftwidth;
$coltotal = 12 - $colcount;
/* Not required for Gumby */
$mainwidth = calcGumbyWidth($coltotal);
$rightWidth = calcGumbyWidth($rightwidth);
$leftWidth = calcGumbyWidth($leftwidth);

// Modules
$header = (int) ($this->countModules('header') > 0);
$nav = (int) ($this->countModules('nav') > 0);
$top = (int) ($this->countModules('top') > 0);
$above = (int) ($this->countModules('above') > 0);
$abovecontent = (int) ($this->countModules('above-content') > 0);
$left = (int) ($this->countModules('left') > 0);
$right = (int) ($this->countModules('right') > 0);
$belowcontent = (int) ($this->countModules('below-content') > 0);
$below = (int) ($this->countModules('below') > 0);
$bottom = (int) ($this->countModules('bottom') > 0);
$footer = (int) ($this->countModules('footer') > 0);


#----------------------------- Construct Code Snippets-----------------------------#
// GPL code taken from Construct template framework by Matt Thomas http://construct-framework.com/
// To enable use of site configuration
$app = JFactory::getApplication();
$pageParams = $app->getParams();
$sitename = $app->getCfg('sitename');
if ($sitetitle){
    $site_id = $sitetitle;
}
else {
    $site_id = $sitename;
}
// Returns a reference to the global document object
$doc = JFactory::getDocument();

// Define relative path to the current template directory
$template = 'templates/' . $this->template;

// Change generator tag
$this->setGenerator($setGeneratorTag);

// Remove MooTools if set to no.
if (!$loadMoo) {
    unset($doc->_scripts[$this->baseurl . '/media/system/js/mootools-core.js']);
    unset($doc->_scripts[$this->baseurl . '/media/system/js/mootools-more.js']);
    unset($doc->_scripts[$this->baseurl . '/media/system/js/core.js']);
    unset($doc->_scripts[$this->baseurl . '/media/system/js/caption.js']);
    unset($doc->_scripts[$this->baseurl . '/media/system/js/modal.js']);
    unset($doc->_scripts[$this->baseurl . '/media/system/js/mootools.js']);
    unset($doc->_scripts[$this->baseurl . '/plugins/system/mtupgrade/mootools.js']);
}

function calcGumbyWidth($input) {
    switch ($input) {
        case(1):
            return "one";
        case(2):
            return "two";
        case(3):
            return "three";
        case(4):
            return "four";
        case(6):
            return "six";
        case(8) :
            return "eight";
        case(9):
            return "nine";
        case(10):
            return "ten";
        case(12):
            return "twelve";
    }
}

#-------------End Construct Code--------------------------------------#

