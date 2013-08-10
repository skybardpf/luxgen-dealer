<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),

            'index' => 'application.controllers.Site.IndexAction',
            'brand_introduction' => 'application.controllers.Site.BrandIntroductionAction',
            'about' => 'application.controllers.Site.AboutAction',
            'chronicles' => 'application.controllers.Site.ChroniclesAction',
            'technology_advanced' => 'application.controllers.Site.TechnologyAdvancedAction',
            'worldwidesites' => 'application.controllers.Site.WorldwideSitesAction',
            'copyright' => 'application.controllers.Site.CopyrightAction',
            'privacy' => 'application.controllers.Site.PrivacyAction',
            'test_drive' => 'application.controllers.Site.TestDriveAction',
            'dealer' => 'application.controllers.Site.DealerAction',
            'contact' => 'application.controllers.Site.ContactAction',

            'error' => 'application.controllers.Site.ErrorAction',
		);
	}


//	/**
//	 * Displays the login page
//	 */
//	public function actionLogin()
//	{
//		$model=new LoginForm;
//
//		// if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}
//
//		// collect user input data
//		if(isset($_POST['LoginForm']))
//		{
//			$model->attributes=$_POST['LoginForm'];
//			// validate user input and redirect to the previous page if valid
//			if($model->validate() && $model->login())
//				$this->redirect(Yii::app()->user->returnUrl);
//		}
//		// display the login form
//		$this->render('login',array('model'=>$model));
//	}
//
//	/**
//	 * Logs out the current user and redirect to homepage.
//	 */
//	public function actionLogout()
//	{
//		Yii::app()->user->logout();
//		$this->redirect(Yii::app()->homeUrl);
//	}
}