<?php
/**
 * Class WorldwideSitesAction
 */
class WorldwideSitesAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | LUXGEN в мире';

        $controller->render('worldwidesites');
    }
}