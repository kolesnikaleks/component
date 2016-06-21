<?php

defined('_JEXEC') or die;


JLoader::register('ComparisonHelper', JPATH_COMPONENT . '/helpers/comparison.php');
//jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('Comparison');

$controller->execute(JFactory::getApplication()->input->get('task'));

$controller->redirect();