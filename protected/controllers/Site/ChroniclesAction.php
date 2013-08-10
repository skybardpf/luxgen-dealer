<?php
/**
 * Class ChroniclesAction
 */
class ChroniclesAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | О компании LUXGEN | Хроники';

        $controller->render('chronicles');
    }
}