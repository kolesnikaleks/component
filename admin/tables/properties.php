<?php

defined('_JEXEC') or die;

jimport('joomla.database.table');

class ComparisonTableProperties extends JTable
{

    function __construct(&$db)
    {
        parent::__construct('#__properties', 'id', $db);



    }


}