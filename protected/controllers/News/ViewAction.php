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

        $model = News::model()->findByPk($id);
        if ($model === null){
            throw new CHttpException(500, 'Новость не найдена.');
        }

        $controller->pageTitle = Yii::app()->name . ' | Новости | ' . $model->title;

        $controller->render(
            'view',
            array(
                'model' => $model
            )
        );
    }
}