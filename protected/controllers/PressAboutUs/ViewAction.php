<?php
/**
 * Class ViewAction
 */
class ViewAction extends CAction
{
    public function run($id)
    {
        $controller = $this->controller;

        $criteria = new CDbCriteria;
        $criteria->condition = 'display = :display AND deleted=:deleted';
        $criteria->order = 'created desc';
        $criteria->params = array(
            ':display' => News::DISPLAY_YES,
            ':deleted' => News::DELETED_NO,
        );

        $model = PressAboutUs::model()->findByPk($id, $criteria);
        if ($model === null){
            throw new CHttpException(500, 'Не найдена статья.');
        }

        $controller->pageTitle = Yii::app()->name . ' | Пресса о нас | ' . $model->title;

        $controller->render(
            'view',
            array(
                'model' => $model
            )
        );
    }
}