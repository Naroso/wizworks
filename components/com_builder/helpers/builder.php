<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Builder
 * @author     neohoang <thaihtvn@gmail.com>
 * @copyright  2016 neohoang
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Class BuilderFrontendHelper
 *
 * @since  1.6
 */
class BuilderHelpersBuilder
{
	/**
	 * Get an instance of the named model
	 *
	 * @param   string  $name  Model name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_builder/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_builder/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'BuilderModel');
		}

		return $model;
	}

	/**
	 * Gets the files attached to an item
	 *
	 * @param   int     $pk     The item's id
	 *
	 * @param   string  $table  The table's name
	 *
	 * @param   string  $field  The field's name
	 *
	 * @return  array  The files
	 */
	public static function getFiles($pk, $table, $field)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query
			->select($field)
			->from($table)
			->where('id = ' . (int) $pk);

		$db->setQuery($query);

		return explode(',', $db->loadResult());
	}
}
