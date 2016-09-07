<?php

defined('_JEXEC') or die ();
use Joomla\Utilities\ArrayHelper;

class plgSystemAdvMenu extends JPlugin
{

    function __construct(&$subject, $config)
    {
        parent::__construct($subject, $config);
    }

    function onContentPrepareForm($form, $data)
    {
        // Application Object
        $app = JFactory::getApplication();


        // Backend
        if ($app instanceof JApplicationAdministrator) {
            if ($form->getName() == 'com_menus.item') {
                JForm::addFormPath(JPATH_SITE . '/plugins/system/advmenu/params');
                $form->loadFile('params', false);
            }
        }
    }

}