<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_foos
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace FooNamespace\Component\Foos\Site\Helper;

\defined('_JEXEC') or die;

use Joomla\CMS\Categories\CategoryNode;
use Joomla\CMS\Language\Multilanguage;

/**
 * Foos Component Route Helper
 *
 * @static
 * @package     Joomla.Site
 * @subpackage  com_foos
 * @since       __DEPLOY_VERSION__
 */
abstract class RouteHelper
{
	/**
	 * Get the URL route for a foos from a foo ID, foos category ID and language
	 *
	 * @param   integer  $id        The id of the foos
	 * @param   integer  $catid     The id of the foos's category
	 * @param   mixed    $language  The id of the language being used.
	 *
	 * @return  string  The link to the foos
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public static function getFoosRoute($id, $catid, $language = 0)
	{
		// Create the link
		$link = 'index.php?option=com_foos&view=foos&id=' . $id;

		if ($catid > 1) {
			$link .= '&catid=' . $catid;
		}

		if ($language && $language !== '*' && Multilanguage::isEnabled()) {
			$link .= '&lang=' . $language;
		}

		return $link;
	}

	/**
	 * Get the URL route for a foo from a foo ID, foos category ID and language
	 *
	 * @param   integer  $id        The id of the foos
	 * @param   integer  $catid     The id of the foos's category
	 * @param   mixed    $language  The id of the language being used.
	 *
	 * @return  string  The link to the foos
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public static function getFooRoute($id, $catid, $language = 0)
	{
		// Create the link
		$link = 'index.php?option=com_foos&view=foo&id=' . $id;

		if ($catid > 1) {
			$link .= '&catid=' . $catid;
		}

		if ($language && $language !== '*' && Multilanguage::isEnabled()) {
			$link .= '&lang=' . $language;
		}

		return $link;
	}

	/**
	 * Get the URL route for a foos category from a foos category ID and language
	 *
	 * @param   mixed  $catid     The id of the foos's category either an integer id or an instance of CategoryNode
	 * @param   mixed  $language  The id of the language being used.
	 *
	 * @return  string  The link to the foos
	 *
	 * @since   __DEPLOY_VERSION__
	 */
	public static function getCategoryRoute($catid, $language = 0)
	{
		if ($catid instanceof CategoryNode) {
			$id = $catid->id;
		} else {
			$id = (int) $catid;
		}

		if ($id < 1) {
			$link = '';
		} else {
			// Create the link
			$link = 'index.php?option=com_foos&view=category&id=' . $id;

			if ($language && $language !== '*' && Multilanguage::isEnabled()) {
				$link .= '&lang=' . $language;
			}
		}

		return $link;
	}
}