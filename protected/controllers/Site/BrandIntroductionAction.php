<?php
/**
 * Class BrandIntroductionAction
 */
class BrandIntroductionAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | О бренде LUXGEN';

        $controller->render('brand_introduction');
    }
}