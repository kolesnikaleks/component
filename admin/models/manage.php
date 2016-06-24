<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

class ComparisonModelManage extends JModelList
{

    protected function getListQuery()
    {
        // Create a new query object.
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        // Select some fields
        $query->select('#__items.name');
        // From the hello table
        $query->from('#__items');

        return $query;


    }

    function getProperty()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('#__properties.prop_name');
        $query->from('#__properties');
        $db->setQuery( $query );


        $results = $db->loadObjectList();
        return $results;

    }

}
