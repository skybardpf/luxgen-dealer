<?php
/**
 * Class NewsController
 */
class NewsController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
            'index' => 'application.controllers.News.IndexAction',
            'view' => 'application.controllers.News.ViewAction',
		);
	}
}