<?php

defined('_JEXEC') or die;


class ComparisonControllerManager extends JControllerAdmin
{
    public function getModel($name = 'Manager', $prefix = 'ComparisonModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;

    }

}