<?php

defined('_JEXEC') or die;

jimport('joomla.database.table');


class ComparisonTableManager extends JTable
{

    function __construct(&$db)
    {
        parent::__construct('#__manager', 'id', $db);



    }


}