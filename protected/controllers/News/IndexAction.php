<?php
/**
 * Class IndexAction
 */
class IndexAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Новости';

        $criteria = new CDbCriteria;
        $criteria->condition = 'display = :display AND deleted=:deleted';
        $criteria->order = 'created desc';
        $criteria->params = array(
            ":display" => News::DISPLAY_YES,
            ":deleted" => News::DELETED_NO,
        );

        $data = News::model()->findAll($criteria);
        $controller->render(
            'index',
            array(
                'data' => $data
            )
        );
    }
}