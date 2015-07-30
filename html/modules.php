<?php
/**
 * @package     Joomla.Site
 * @subpackage  Gumber Template for Joomla
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
include_once JPATH_THEMES . '/gumber/getparams.php';//include to reuse function
/*
 * mapping toward Gumby framework standards x columns instead of spanx
 */
function modChrome_gumber($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);

	$moduleClass    = $bootstrapSize != 0 ?  calcGumbyWidth($bootstrapSize)." columns" : '';
	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?><?php echo $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag; ?> class="<?php echo $params->get('header_class'); ?>"><?php echo $module->title; ?></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>
		
		</<?php echo $moduleTag; ?>>

	<?php endif;
}



