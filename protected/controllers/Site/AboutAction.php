<?php
/**
 * Class AboutAction
 */
class AboutAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | О компании LUXGEN';

        $controller->render('about');
    }
}