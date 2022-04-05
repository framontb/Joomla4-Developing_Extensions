<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_foo
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace FooNamespace\Module\Foo\Site\Helper;

\defined('_JEXEC') or die;

/**
 * Helper for mod_foo
 *
 * @since  __BUMP_VERSION__
 */
class FooHelper
{
	/**
	 * Retrieve foo test
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getText()
	{
		return 'FooHelpertest';
	}
}