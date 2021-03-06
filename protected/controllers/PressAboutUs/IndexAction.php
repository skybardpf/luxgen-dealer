<?php
/**
 * Class IndexAction
 */
class IndexAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Пресса о нас';

        $criteria = new CDbCriteria;
        $criteria->condition = 'display = :display AND deleted=:deleted';
        $criteria->order = 'created desc';
        $criteria->params = array(
            ':display' => News::DISPLAY_YES,
            ':deleted' => News::DELETED_NO,
        );

        $data = PressAboutUs::model()->findAll($criteria);
        $controller->render(
            'index',
            array(
                'data' => $data
            )
        );
    }
}