<?php
/**
 * @var NewsController $this
 */
?>

<?php
    Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.timeline.css');
?>

<div class="midWrap">
    <div class="HeaderSlide"></div>
    <div class="subNav subNavFixed both">
        <ul class="subNavUL both">
            <li class="NavList png"><a href="<?= $this->createUrl('/news'); ?>">Последние</a></li>
            <li class="NavList png"><a href="<?= $this->createUrl('/news/?year=2012'); ?>">2012</a></li>
            <li class="NavList png"><a href="<?= $this->createUrl('/news/?year=2013'); ?>">2013</a></li>
            <li class="NavList png selected"><a href="<?= $this->createUrl('/press_about_us/'); ?>">Пресса о нас</a></li>
        </ul>
        <span class="subNavMask"></span>
    </div>
    <div class="mainContent">
        <div class="cont Technology">
            <div class="both titleFrame">
                <h3 class="title">Пресса о нас</h3>
                <span id="chooseFont" class="tools">
                    <a rel="fontSmall" href="#" class="fontDecrease">Маленький</a>
                    <a rel="fontNormal" href="#" class="fontReset">Средний</a>
                    <a rel="fontLarge" href="#" class="fontIncrease">Большой</a>
                </span>
            </div>
            <div id="contentFont" class="fontNormal">
                <div class="ContData press">
                    <ul class="ContTimeline both">
                        <li class="ContTimelineList ContTimelineLeft">
                            <span class="TimelineYear">2013</span>
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop press">
                                    <time class="TimelineDate">2013.06.25</time>
                                    <h5 class="TimelineTitle">werwer</h5>
                                    <h5 class="TimelineTitle grey">А это описание или заголовок источника</h5>
                                </li>
                                <li class="lefter"><p>
                                        werwerwer</p>
                                </li>
                                <li class="lefter" style="margin-bottom: 10px;">
                                    <a class="blue_link" href="<?= $this->createUrl('view', array('id' => '15')); ?>">Статья целиком</a>
                                <li>
                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineMargin ContTimelineRight">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop press">
                                    <time class="TimelineDate">2013.06.21</time>
                                    <h5 class="TimelineTitle">Тест ссылки</h5>
                                    <h5 class="TimelineTitle grey">нет такого</h5>
                                </li>
                                <li class="lefter">
                                    <p>вафвВввыфваыфафываф</p>
                                </li>
                                <li class="lefter" style="margin-bottom: 10px;">
                                    <a class="blue_link" href="http://google.ru">Статья целиком</a>
                                <li>
                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineLeft">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop press">
                                    <time class="TimelineDate">2013.06.21</time>
                                    <h5 class="TimelineTitle">Новая с файлом</h5>
                                    <h5 class="TimelineTitle grey">совсем новый файл</h5>
                                </li>
                                <li class="lefter"><p>Тот самый файл</p>
                                </li>
                                <li class="lefter" style="margin-bottom: 10px;">
                                    <a class="blue_link" href="<?= $this->baseAssets.'/docs/press_about_us/MLP-Wallpaper-my-little-pony-friendship-is-magic-oc-32040152-1920-1200.jpg';?>">Статья целиком</a>
                                <li>

                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineMargin ContTimelineRight">
                            <ul class="TimelineBox">
                                <li class="ContTimelineTop press">
                                    <time class="TimelineDate">2013.06.21</time>
                                    <h5 class="TimelineTitle">авываыв</h5>
                                    <h5 class="TimelineTitle grey">ываываыв</h5>
                                </li>
                                <li class="lefter"><p>ываываываыва</p>
                                </li>
                                <li class="lefter" style="margin-bottom: 10px;">
                                    <a class="blue_link" href="https://www.google.ru/webhp?sourceid=chrome-instant&amp;ion=1&amp;ie=UTF-8#newwindow=1&amp;sclient=psy-ab&amp;q=jquery%20radio%20button%20changed&amp;oq=&amp;gs_l=&amp;pbx=1&amp;fp=20c0d414abd5ee4a&amp;ion=1&amp;bav=on.2,or.r_qf.&amp;bvm=bv.48293060,d.bGE">Статья целиком</a>
                                <li>
                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineLeft">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop press">
                                    <time class="TimelineDate">2013.06.20</time>
                                    <h5 class="TimelineTitle">Дополнительный материал</h5>
                                    <h5 class="TimelineTitle grey">Неизвестно откуда</h5>
                                </li>
                                <li class="lefter">Куда идём мы с Пятачком -
                                    Большой-большой секрет.
                                    И не расскажем мы о нём...
                                </li>
                                <li class="lefter" style="margin-bottom: 10px;">
                                    <a class="blue_link" href="<?= $this->baseAssets.'/docs/press_about_us/oshibka_copy(1371725904_601).txt';?>">Статья целиком</a>
                                <li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="topBtn" class="topBtn" style="display: none;">
            <span> </span>
        </div>
    </div>
</div>