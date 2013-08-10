<?php
/**
 * Class Press_about_usController
 */
class Press_about_usController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
            'index' => 'application.controllers.PressAboutUs.IndexAction',
            'view' => 'application.controllers.PressAboutUs.ViewAction',
		);
	}
}