<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import Joomla view library
jimport('joomla.application.component.view');
/**

 */
class ComparisonViewProperty extends JViewLegacy
{
    /**
     * display method
     *
     * @return void
     */
    public function display($tpl = null)
    {
        // get the Data
        $forms = $this->get('Form');
        $items = $this->get('Item');
        // Check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }
        // Assign the Data
        $this->forms = $forms;
        $this->items = $items;
        // Set the toolbar
        $this->addToolBar();
        // Display the template
        parent::display($tpl);
    }
    /**
     * Setting the toolbar
     */
    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->items->id == 0);
        JToolBarHelper::title($isNew ? JText::_('COM_COMPARISON_MANAGER_PROPERTIES_NEW') : JText::_('COM_COMPARISON_MANAGER_PROPERTIES_EDIT'));
        JToolBarHelper::save('property.save');
        JToolBarHelper::cancel('property.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}