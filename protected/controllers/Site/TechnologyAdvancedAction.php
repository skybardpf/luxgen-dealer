<?php
/**
 * Class TechnologyAdvancedAction
 */
class TechnologyAdvancedAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Передовые технологии';

        $controller->render('technology_advanced');
    }
}