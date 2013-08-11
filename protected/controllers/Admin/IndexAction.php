<?php
/**
 * Class IndexAction
 */
class IndexAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Админка';
        $controller->render(
            'index'
        );
    }
}