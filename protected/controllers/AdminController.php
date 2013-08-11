<?php
/**
 * Class AdminController
 */
class AdminController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
            'index' => 'application.controllers.Admin.IndexAction',
		);
	}
}