<?php
/**
 * @var GalleryController $this
 * @var News $model
 */
?>

<?php
//Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/reset.css');
//Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/colorbox.css');
//Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.media.css');
//Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.mediaBox.template.css');
//Yii::app()->clientScript->registerCoreScript('query');
//
//Yii::app()->clientScript->registerScriptFile('jquery.headerNav.js');
//Yii::app()->clientScript->registerScriptFile('jquery.colorbox.js');
?>
<div class="midWrap">


    <div class="midWrap">
        <div class="HeaderSlide"></div>
        <div class="subNav subNavFixed both">
            <ul class="subNavUL both">
                <li class="NavList png selected"><a href="<?= $this->createUrl('/news'); ?>">Последние</a></li>
                <li class="NavList png"><a href="<?= $this->createUrl('/news/?year=2012'); ?>">2012</a></li>
                <li class="NavList png"><a href="<?= $this->createUrl('/news/?year=2013'); ?>">2013</a></li>
                <li class="NavList png"><a href="<?= $this->createUrl('/press_about_us'); ?>">Пресса о нас</a></li>
            </ul>
            <span class="subNavMask"></span>
        </div>
        <div class="mainContent">
            <div class="cont Technology">
                <div class="both titleFrame">
                    <h3 class="title">Новости</h3>
                <span id="chooseFont" class="tools">
                    <a rel="fontSmall" href="#" class="fontDecrease">Маленький</a>
                    <a rel="fontNormal" href="#" class="fontReset">Средний</a>
                    <a rel="fontLarge" href="#" class="fontIncrease">Большой</a>
                </span>
                </div>
                <div class="newsTitle">
                    <h3><?= $model->title; ?></h3>
                </div>
                <div id="contentFont" class="fontNormal">
                    <div class="ContData">
                        <div>
                            <ul class="ContNews">
                                <li class="ContNewsLeft">
                                    <div>
                                        <div class="contentImg">
                                            <img id="ctl00_MainContent_img1"></div>
                                            <p>
                                                <span style="color: rgb(0, 0, 255); ">
                                                    Дата：<?= date('Y.m.d', strtotime($model->created)); ?>
                                                </span>
                                            </p>
                                            <?= $model->text; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dCenter">
                    <a href="/news/" style="color:#3384c6; ">Список</a>
                </div>
            </div>
            <div id="topBtn" class="topBtn" style="display: none;">
                <span> </span>
            </div>
        </div>
    </div>
</div>
