<?php
/**
 * Class CopyrightAction
 */
class CopyrightAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Пункты о защите авторского права и товарных знаков';

        $controller->render('copyright');
    }
}