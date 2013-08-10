<?php
/**
 * Class PrivacyAction
 */
class PrivacyAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Положение о конфеденциольности';

        $controller->render('privacy');
    }
}