<?php defined('_JEXEC') or die;
/**
* @package		Exmaple Template for Joomla! Day New England 2012 Template Workshop
* @author		Matt Thomas http://construct-framework.com | http://betweenbrain.com
* @copyright	Copyright (C) 2012 Matt Thomas. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

// To enable use of site configuration
$app                = JFactory::getApplication();
// Returns a reference to the global document object
$doc                = JFactory::getDocument();

/*
 * Head Elements
 */

$doc->addStyleSheet('templates/' . $this->template . '/css/screen.css','text/css','screen');
$doc->addCustomTag('<meta name="author" content="Matt Thomas, matt@betweenbrain.com" />');
$doc->addFavicon('templates/' . $this->template . '/favicon.png','image/png','shortcut icon');
$doc->addScript('https://raw.github.com/LeaVerou/prefixfree/master/prefixfree.min.js');
$doc->addStyleSheet('http://fonts.googleapis.com/css?family=ubuntu');
$doc->addStyleDeclaration(' body {font-family: "Ubuntu", serif;}');

/*
 * Sample parameter functions
 */

 // Create shortcut to parameter for convienence
$setGeneratorTag	= htmlspecialchars($this->params->get('setGeneratorTag'));
// Change generator tag
$this->setGenerator($setGeneratorTag);


/*
 * Template logic
 */

// Create a dynamic class for dynamic layouts
if ($this->countModules('position-7')) :
	$columnLayout   = 'column-1-main';
else :
	$columnLayout   = 'main-only';
endif; ?>

