<?php
/**
 * Class GalleryController
 */
class GalleryController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
            'index' => 'application.controllers.Gallery.IndexAction',
		);
	}
}