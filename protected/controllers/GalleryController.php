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
            'images' => 'application.controllers.Gallery.ImagesAction',
            'videos' => 'application.controllers.Gallery.VideosAction',

            'view' => 'application.controllers.Gallery.ViewAction',
		);
	}
}