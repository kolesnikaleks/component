<?php


defined('_JEXEC') or die('Restricted Access');


jimport('joomla.application.component.view');


class ComparisonViewComparison extends JViewLegacy
{

    protected $item;


    public function display($tpl = null)
    {
        $this->item = $this->get('Item');

        parent::display($tpl);

    }


}