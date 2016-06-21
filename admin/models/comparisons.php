<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');



class ComparisonModelComparisons extends JModelList
{
    
    protected function getListQuery()
    {
        // Create a new query object.
        $db    = JFactory::getDBO();
        $query = $db->getQuery(true);
        // Select some fields
        $query->select('#__items.id,#__items.name,#__items.status,#__categories.title');
        // From the hello table
        $query->from('#__items,#__categories');
        $query->where('#__items.catid = #__categories.id');



        return $query;


    }
}