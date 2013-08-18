<?php
/**
 * @author Skibardin A.A. <skybardpf@artektiv.ru>
 */
class AdminModule extends CWebModule
{
//    public $layouts = 'layouts/main';
    public $baseAssets = null;

    public $breadcrumbs = array();
//
    public $homeUrl;

    public function init()
    {
        parent::init();

        $this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
        $this->layout = 'admin';
        $this->homeUrl = Yii::app()->createUrl($this->getId());

        Yii::setPathOfAlias('admin',dirname(__FILE__));
        Yii::app()->setComponents(array(
            'errorHandler'=>array(
                'class'=>'CErrorHandler',
                'errorAction'=>$this->getId().'/error/error',
            ),
            'user'=>array(
                'class' => 'CWebUser',
                'stateKeyPrefix' => 'admin',
                'loginUrl'=>Yii::app()->createUrl($this->getId().'/login/login'),
            ),
        ), false);

        if (!$this->baseAssets) {
            $this->baseAssets = Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('application.modules.admin.assets'),
                false,
                -1,
                YII_DEBUG
            );
        }
    }
}