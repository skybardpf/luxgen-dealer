<?php
/**
 * Class DealerAction
 */
class DealerAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Как стать дилером LUXGEN';

        $controller->render('dealer');
    }
}