<?php
/**
 * Class ViewAction
 */
class ViewAction extends CAction
{
    /**
     * @param int $id
     * @throws CHttpException
     */
    public function run($id)
    {

        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Галерея изображений';

        $image = GalleryImage::model()->findByPk($id);
        if ($image === null){
            throw new CHttpException(500, 'Не найдено изображение');
        }

        $controller->renderPartial('view',
            array(
                'image' => $image
            )
        );
    }
}