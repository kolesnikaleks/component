<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorld component helper.
 *
 * @param   string  $submenu  The name of the active view.
 *
 * @return  void
 *
 * @since   1.6
 */
abstract class ComparisonHelper
{
    /**
     * Configure the Linkbar.
     *
     * @return Bool
     */

    public static function addSubmenu($submenu)
    {
        JSubMenuHelper::addEntry(
            JText::_('COM_COMPARISON_SUBMENU_MESSAGES'),
            'index.php?option=com_comparison',
            $submenu == 'comparisons'
        );

        JSubMenuHelper::addEntry(
            JText::_('COM_COMPARISON_SUBMENU_PROPERTIES'),
            'index.php?option=com_comparison&view=properties',
            $submenu == 'properties'
        );

        JSubMenuHelper::addEntry(
            JText::_('COM_COMPARISON_SUBMENU_PROPERTIES'),
            'index.php?option=com_comparison&view=manager',
            $submenu == 'manager'
        );


        JSubMenuHelper::addEntry(
            JText::_('COM_COMPARISON_SUBMENU_CATEGORIES'),
            'index.php?option=com_categories&view=categories&extension=com_comparison',
            $submenu == 'categories'
        );

        // Set some global property
        $document = JFactory::getDocument();
        
        if ($submenu == 'categories')
        {
            $document->setTitle(JText::_('COM_COMPARISON_ADMINISTRATION_CATEGORIES'));
        }
    }
}