<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;

$app = Factory::getApplication();
$input = $app->input;

$wa = $this->document->getWebAssetManager();
$wa->useScript('keepalive')
	->useScript('form.validate')
    ->useScript('com_foos.admin-foos-letter');

$layout  = 'edit';
$tmpl = $input->get('tmpl', '', 'cmd') === 'component' ? '&tmpl=component' : '';
?>

<form action="<?php echo Route::_('index.php?option=com_foos&layout=' . $layout . $tmpl . '&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="foo-form" class="form-validate">
	<?php echo $this->getForm()->renderField('name'); ?>
	<?php echo $this->getForm()->renderField('alias'); ?>
    <?php echo $this->getForm()->renderField('access'); ?>
    <?php echo $this->getForm()->renderField('catid'); ?>
	<?php echo $this->getForm()->renderField('published'); ?>
	<?php echo $this->getForm()->renderField('publish_up'); ?>
	<?php echo $this->getForm()->renderField('publish_down'); ?>
	<input type="hidden" name="task" value="">
	<?php echo HTMLHelper::_('form.token'); ?>
</form>