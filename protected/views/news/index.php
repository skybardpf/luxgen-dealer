<?php
/**
 * @var NewsController $this
 */
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
                <div>
                    <ul class="ContMonth both">
                        <li sid="1" class="month MonthBtn"><span class="month01">1</span></li>
                        <li sid="2" class="month MonthBtn"><span class="month02">2</span></li>
                        <li sid="3" class="month MonthBtn"><span class="month03">3</span></li>
                        <li sid="4" class="month MonthBtn"><span class="month04">4</span></li>
                        <li sid="5" class="month MonthBtn"><span class="month05">5</span></li>
                        <li sid="6" class="month MonthBtn"><span class="month06">6</span></li>
                        <li sid="7" class="month MonthBtn"><span class="month07">7</span></li>
                        <li sid="8" class="month MonthBtn"><span class="month08">8</span></li>
                        <li sid="9" class="month MonthBtn"><span class="month09">9</span></li>
                        <li sid="10" class="month MonthBtn"><span class="month10">10</span></li>
                        <li sid="11" class="month MonthBtn"><span class="month11">11</span></li>
                        <li sid="12" class="month MonthBtn"><span class="month12">12</span></li>
                    </ul>
                </div>
                <div id="contentFont" class="fontNormal">
                    <div class="ContData">
                        <ul class="ContTimeline both">
                            <li class="ContTimelineList">
                                <span sid="4" class="TimelineYear" id="monthcont3">Апр.</span>
                                <ul class="TimelineBox">
                                    <a href="<?= $this->createUrl('view', array('id' => '11')); ?>">
                                        <li class="ContTimelineTop">
                                            <time class="TimelineDate">2013.04.17</time>
                                            <h5 class="TimelineTitle">Участие компании LUXGEN во Вьетнамской
                                                автовыставке-2012 </h5>
                                        </li>
                                        <li><img src="<?= $this->baseAssets.'/img/news/small/448772.big.jpg';?>"></li>
                                    </a>
                                </ul>
                            </li>
                            <li class="ContTimelineList">
                                <span sid="9" class="TimelineYear" id="monthcont8">Сен.</span>
                                <ul class="TimelineBox">
                                    <a href="<?= $this->createUrl('view', array('id' => '9')); ?>">
                                        <li class="ContTimelineTop">
                                            <time class="TimelineDate">2012.09.28</time>
                                            <h5 class="TimelineTitle">Участие компании LUXGEN во Вьетнамской
                                                автовыставке-2012</h5>
                                        </li>
                                        <li><img src="<?= $this->baseAssets.'/img/news/small/20121009105509253.jpg';?>"></li>
                                    </a>
                                </ul>
                            </li>
                            <li class="ContTimelineList">
                                <span sid="5" class="TimelineYear" id="monthcont4">Май</span>
                                <ul class="TimelineBox">
                                    <a href="<?= $this->createUrl('view', array('id' => '10')); ?>">
                                        <li class="ContTimelineTop">
                                            <time class="TimelineDate">2012.05.20</time>
                                            <h5 class="TimelineTitle">LUXGEN объявляет об открытии представительства в
                                                Султанате Оман</h5>
                                        </li>
                                        <li><img src="<?= $this->baseAssets.'/img/news/small/20121009105421860.jpg';?>"></li>
                                    </a>
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
</div>