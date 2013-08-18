<?php
/**
 * Class TestDriveAction
 */
class TestDriveAction extends CAction
{
    public function run()
    {
        $controller = $this->controller;
        $controller->pageTitle = Yii::app()->name . ' | Записаться на тест-драйв';

        $model = new TestDrive();

        $class = get_class($model);
        if(isset($_POST['ajax']) && $_POST['ajax']==='form-test-drive') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST[$class])) {
            $model->setAttributes($_POST[$class]);
            if ($model->validate()) {
                try {
                    $model->created = time();
                    $model->save();

                    $controller->redirect($controller->createUrl('site/test_drive'));
                } catch (CException $e) {
                    $model->addError('id', $e->getMessage());
                }
            }
        }

        $controller->render(
            'test_drive',
            array(
                'model' => $model
            )
        );
    }
}