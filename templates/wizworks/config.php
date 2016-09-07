<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// remove Generator meta tag
$this->setGenerator(null);

$app = JFactory::getApplication();
$doc = JFactory::getDocument();

$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/theme.js');

// Add Stylesheets
//$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/template.css');