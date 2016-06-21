<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

JLog::addLogger(
    array('text_file' => 'com_comparison.php'),
    JLog::ALL,
    array('com_comparison')
);

$controller = JControllerLegacy::getInstance('Comparison');

$input = JFactory::getApplication()->input;

$controller ->execute($input ->getCmd('task'));

$controller->redirect();