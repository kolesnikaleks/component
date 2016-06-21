<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import Joomla view library
jimport('joomla.application.component.view');
/**
 * Properties
 */
class ComparisonViewProperties extends JViewLegacy
{
    function display($tpl = null)
    {
        // Get data from the model
        $itemsis      = $this->get('Items');
        $pagination = $this->get('Pagination');
        // Check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        // Assign data to the view
        $this->itemsis      = $itemsis;
        $this->pagination = $pagination;

        // Set the toolbar
        $this->addToolBar();
        // Display the template
        parent::display($tpl);

        ComparisonHelper::addSubmenu('properties');

    }
    /**
     * Setting the toolbar
     */
    protected function addToolBar()
    {
        JToolBarHelper::title(JText::_('COM_COMPARISON_MANAGER_PROPERTIES'));
        JToolBarHelper::deleteList('', 'properties.delete');
        JToolBarHelper::editList('property.edit');
        JToolBarHelper::addNew('property.add');
    }
}