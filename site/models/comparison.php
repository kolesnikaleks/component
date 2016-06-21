<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.modelitem');


class ComparisonModelComparison extends JModelItem
{

    public function getItem()
    {
        if (!isset($this->_item)) {

            $this->_item = 'Comparison Chart';
        }
        return $this->_item;

    }


}
