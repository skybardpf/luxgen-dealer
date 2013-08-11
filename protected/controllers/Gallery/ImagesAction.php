<?php
/**
 * Class ImagesAction
 */
class ImagesAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Галерея изображений';

        $data = GalleryImage::model()->findAll();

        $controller->render('images',
            array(
                'data' => $data
            )
        );
    }
}