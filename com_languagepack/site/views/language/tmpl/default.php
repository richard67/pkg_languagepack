<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_languagepacks
 *
 * @copyright   Copyright (C) 2020 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var  $this  LanguagepackViewLanguage */

use Joomla\CMS\Language\Text;
?>

<div class="languages">
    <h1>
	    <?php echo Text::sprintf('COM_LANGUAGE_PACK_LANGUAGE_RELEASES_CREATED_IN', Text::_($this->applicationName), $this->language->name) ?>
    </h1>
    <p><?php echo Text::sprintf('COM_LANGUAGE_PACK_LANGUAGE_LANDING_PAGE_INFO', $this->language->name) ?></p>
    <button class="btn btn-warning"><?php echo Text::sprintf('COM_LANGUAGE_PACK_LANGUAGE_CREATE_A_RELEASE'); ?></button>
    <button class="btn btn-primary"><?php echo Text::sprintf('COM_LANGUAGE_PACK_LANGUAGE_VIEW_PUBLIC_PAGE'); ?></button>
</div>