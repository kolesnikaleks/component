<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');


class ComparisonModelProperties extends JModelList
{
    protected function getListQuery()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        // Select some fields
        $query->select('#__properties.id,#__properties.prop_name,#__properties.value,#__categories.title');
        // From the properties table
        $query->from('#__properties,#__categories');
        $query->where('#__properties.catid = #__categories.id');


        return $query;


    }

}
