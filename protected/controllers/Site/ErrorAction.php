<?php
/**
 * Class ErrorAction
 */
class ErrorAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $controller->render('error', $error);
        }
    }
}