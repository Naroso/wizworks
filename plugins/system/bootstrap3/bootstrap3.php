<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  System.bootsrap3
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Joomla! Page Bootstrap3 Plugin.
 *
 * @since  3.6
 */
class PlgSystemBootstrap3 extends JPlugin {

    public function __construct(& $subject, $config) {
        parent::__construct($subject, $config);
    }

    public function onBeforeCompileHead() {
        // Application Object
        $app = JFactory::getApplication();


        // Frontend
        if ($app instanceof JApplicationSite) {
            $doc = JFactory::getDocument();
            // Replace default jquery
            $doc->_scripts = $this->change_array_key($doc->_scripts,JURI::root(true) . '/media/jui/js/jquery.min.js'
                                                        ,'//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js');
            
            // Replace default jquery
            $doc->_scripts = $this->change_array_key($doc->_scripts,JURI::root(true) . '/media/jui/js/jquery-migrate.min.js'
                                                        ,'//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.0/jquery-migrate.min.js');
            
            // Replace default bootstrap
            $doc->_scripts = $this->change_array_key($doc->_scripts,JURI::root(true) . '/media/jui/js/bootstrap.min.js'
                                                        ,'//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js');
        }
    }

    private function change_array_key($array, $old_key, $new_key) {
        if (!is_array($array)) {
            print 'You must enter a array as a haystack!';
            exit;
        }
        if (!array_key_exists($old_key, $array)) {
            return $array;
        }

        $key_pos = array_search($old_key, array_keys($array));
        $arr_before = array_slice($array, 0, $key_pos);
        $arr_after = array_slice($array, $key_pos + 1);
        $arr_renamed = array($new_key => $array[$old_key]);

        return $arr_before + $arr_renamed + $arr_after;
    }

}
