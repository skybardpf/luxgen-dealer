<?php
/**
 * @var SiteController $this
 */
?>

<?php
    Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.technology.css');
?>

<div class="midWrap">
    <div class="HeaderSlide">&nbsp;</div>
    <div class="subNav subNavFixed both">
        <ul class="subNavUL both">
            <li class="NavList png selected"><a href="<?= $this->createUrl('technology_advanced'); ?>">Передовые технологии</a></li>
        </ul>
        <span class="subNavMask"></span></div>
    <div class="mainContent">
        <div class="cont Technology">
            <div class="both titleFrame">
                <h3 class="title">Передовые технологии</h3>
                <span id="chooseFont" class="tools">
                    <a rel="fontSmall" href="#" class="fontDecrease">Маленький</a>
                    <a rel="fontNormal" href="#" class="fontReset">Средний</a>
                    <a rel="fontLarge" href="#" class="fontIncrease">Большой</a>
                </span>
            </div>
            <div class="media" style="text-align: center;">
                <img src="<?= $this->baseAssets.'/img/techno.jpg'; ?>"/></div>
            <div id="contentFont" class="fontNormal">
                <div class="ContData">
                    <ul class="technologyUL both">
                        <li class="technologyList">
                            <section class="Section">
                                <h3 class="title title01">Eagle View<span class="ENFont">+</span></h3>
                                <h4 class="title title01">Система кругового обзора</h4>

                                <p>При маневре на узкой улице или на парковке система Eagle View<span
                                        class="ENFont">+</span>выводит на экран бортового компьютера изображение
                                    объектов,
                                    находящихся в радиусе 2 метров от автомобиля. Используя панель контроля THINK<span
                                        class="ENFont">+</span>, при необходимости водитель может вывести полноразмерное
                                    изображение, подаваемое любой из четырех камер наблюдения системы. Помимо этого
                                    образы с
                                    камер заднего вида способны демонстрироваться с динамическим наложением
                                    вспомогательной
                                    парковочной разметки.</p></section>
                            <div youtube="XlRvWaqHhWo" class="media youtubeMediaList">
                                <img src="<?= $this->baseAssets.'/img/technology.Advanced.01.jpg'; ?>"/><span class="playMask"></span></div>
                        </li>
                        <li class="technologyList technologyListCenter">
                            <section class="Section">
                                <h3 class="title title01">Night Vision<span class="ENFont">+</span></h3>
                                <h4 class="title title03"></h4>

                                <p>Система ночного видения Night Vision<span class="ENFont">+</span> со встроенной
                                    высокочувствительной CCD-камерой увеличивает видимость при движении в темноте на 100
                                    метров впереди и 40 метров в поперечной зоне охвата. Улучшенное изображение
                                    выводится на
                                    10-дюймовый экран системы THINK<span class="ENFont">+</span>, что позволяет водителю
                                    надежнее ориентировался в дорожной обстановке.</p></section>
                            <div youtube="FoELIGUj89A" class="media youtubeMediaList">
                                <img src="<?= $this->baseAssets.'/img/technology.Advanced.03.jpg'; ?>"/><span class="playMask"></span></div>
                        </li>
                        <li class="technologyList">
                            <section class="Section">
                                <h3 class="title title01">Side View<span class="ENFont">+</span></h3>
                                <h4 class="title title04"></h4>

                                <p>При включении указателя поворота система контроля слепых зон Side View
                                    <span class="enfont">+ автоматически выводит на дисплей видеоизображение соответствующей зоны для повышения безопасности при смене полосы движения.</span>
                                </p></section>
                            <div youtube="wGtUslrod6Y" class="media youtubeMediaList">
                                <img src="<?= $this->baseAssets.'/img/technology.Advanced.05.jpg'; ?>"/><span class="playMask"></span></div>
                        </li>
                    </ul>
                    <ul class="technologyUL both">
                        <li class="technologyList">
                            <section class="Section">
                                <h3 class="title title01">LDWS<span class="ENFont">+</span></h3>
                                <h4 class="title title05">Система распознавания дорожной разметки</h4>

                                <p>Система LDWS<span class="ENFont">+</span> автоматически активизируется на скорости
                                    выше
                                    60 км/ч для определения местонахождение разделительных полос и их текущего
                                    расположения
                                    по отношению к автомобилю. Системы визуального и аудио оповещения включаются в
                                    случае
                                    значительного приближения к разделительным полосам без включения поворотных
                                    сигналов.
                                </p></section>
                            <div youtube="_f4q8RaFD8c" class="media youtubeMediaList">
                                <img src="<?= $this->baseAssets.'/img/technology.Advanced.06.jpg'; ?>"/><span class="playMask"></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="topBtn" class="topBtn" style="display: none;">top</div>
    </div>

</div>