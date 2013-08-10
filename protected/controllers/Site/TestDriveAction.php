<?php
/**
 * Class TestDriveAction
 */
class TestDriveAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Записаться на тест-драйв';

        $controller->render('test_drive');
    }
}