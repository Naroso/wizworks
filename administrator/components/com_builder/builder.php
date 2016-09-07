<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Builder
 * @author     neohoang <thaihtvn@gmail.com>
 * @copyright  2016 neohoang
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_builder'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Builder', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Builder');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
