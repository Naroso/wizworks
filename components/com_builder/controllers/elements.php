<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Builder
 * @author     neohoang <thaihtvn@gmail.com>
 * @copyright  2016 neohoang
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Elements list controller class.
 *
 * @since  1.6
 */
class BuilderControllerElements extends BuilderController
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional
	 * @param   array   $config  Configuration array for model. Optional
	 *
	 * @return object	The model
	 *
	 * @since	1.6
	 */
	public function &getModel($name = 'Elements', $prefix = 'BuilderModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));

		return $model;
	}
}
