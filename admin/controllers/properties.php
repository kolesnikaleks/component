<?php

defined('_JEXEC') or die;


class ComparisonControllerProperties extends JControllerAdmin
{
    public function getModel($name = 'Property', $prefix = 'ComparisonModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);

        return $model;

    }

}