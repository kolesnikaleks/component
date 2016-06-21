<?php

defined('_JEXEC') or die;

jimport('joomla.database.table');


class ComparisonTableComparison extends JTable
{

    function __construct(&$db)
    {
        parent::__construct('#__items', 'id', $db);

        
        
    }


}