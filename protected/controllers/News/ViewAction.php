<?php
/**
 * Class ViewAction
 */
class ViewAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Новости';

        $controller->render('view');
    }
}