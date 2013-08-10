<?php
/**
 * Class ContactAction
 */
class ContactAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Контактная информация';

//        $model=new ContactForm;
//		if(isset($_POST['ContactForm']))
//		{
//			$model->attributes=$_POST['ContactForm'];
//			if($model->validate())
//			{
//
//			}
//		}
//        $controller->render('contact',array('model'=>$model));
        $controller->render('contact');
    }
}