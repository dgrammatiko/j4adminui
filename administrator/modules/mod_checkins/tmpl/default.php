<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_checkins
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

?>
<div class="mod-checkins text-center mod-checkins-<?php echo $params->get('moduleclass_sfx', ''); ?>" id="mod-checkins-<?php echo $module->id; ?>">
    <div class="j-card-image-mod-container">
		<div class="mod-checkins-image-container">
			<?php if($checkins > 0) : ?>
				<?php echo HTMLHelper::_('image', 'mod_checkins/sad-checkin.jpg', 'Sad Global Checkin', array('class' => "mod-checkins-image"), true); ?>
			<?php else : ?>
				<?php echo HTMLHelper::_('image', 'mod_checkins/happy-checkin.jpg', 'Happy Global Checkin', array('class' => "mod-checkins-image"), true); ?>
			<?php endif; ?>
		</div>
		<div class="j-card-counter-msg">
			<?php echo Text::plural('MOD_CHECKINS_GLOBAL_CHECKIN_MSG', $checkins); ?>
		</div>
	</div>
    <div class="j-card-footer j-card-footer-lg">
        <div class="j-card-footer-item">
			<a href="<?php echo Route::_('index.php?option=com_checkin'); ?>" class=""><?php echo Text::_('MOD_CHECKINS_GO_TO_CHECKINS'); ?></a>
		</div>
    </div>
</div>
