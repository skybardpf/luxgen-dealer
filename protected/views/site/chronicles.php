<?php
/**
 * @var SiteController $this
 */
?>

<div class="midWrap">
    <div class="HeaderSlide"></div>
    <div class="subNav subNavFixed both">
        <ul class="subNavUL both">
            <li class="NavList png"><a href="<?= $this->createUrl('brand_introduction'); ?>">О бренде LUXGEN</a></li>
            <li class="NavList png"><a href="<?= $this->createUrl('about'); ?>">Философия бренда</a></li>
            <li class="NavList png selected"><a href="<?= $this->createUrl('chronicles'); ?>">Хроники</a></li>
        </ul>
        <span class="subNavMask"></span>
    </div>
    <div class="mainContent">
        <div class="cont Technology">
            <div class="both titleFrame">
                <h3 class="title">Хроники</h3>
                <span id="chooseFont" class="tools">
                    <a rel="fontSmall" href="#" class="fontDecrease">Маленький</a>
                    <a rel="fontNormal" href="#" class="fontReset">Средний</a>
                    <a rel="fontLarge" href="#" class="fontIncrease">Большой</a>
                </span>
            </div>
            <div id="contentFont" class="fontNormal">
                <div class="ContData">
                    <ul class="ContTimeline both">
                        <li class="ContTimelineList ContTimelineLeft">
                            <span class="TimelineYear">2012</span>
                            <ul class="TimelineBox">
                                <li class="ContTimelineTop">
                                    <time class="TimelineDate">2012.11.09</time>
                                    <h5 class="TimelineTitle">Представление первого среднеразмерного седана марки -
                                        LUXGEN5 SEDAN</h5>
                                </li>
                                <li><img src="<?= $this->baseAssets.'/img/userfiles/chronicle/small/20120913172036418.jpg';?>"></li>
                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineMargin ContTimelineRight">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop">
                                    <time class="TimelineDate">2012.04.09</time>
                                    <h5 class="TimelineTitle">Участие компании LUXGEN в Тайваньском международном
                                        автосалоне электромобилей 2012 года (LUXGEN EV+)</h5>
                                </li>
                                <li><img src="<?= $this->baseAssets.'/img/userfiles/chronicle/small/20120913172058067.jpg';?>"></li>

                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineLeft">
                            <span class="TimelineYear">2011</span>
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop">
                                    <time class="TimelineDate">2011.11.11</time>
                                    <h5 class="TimelineTitle">Слет владельцев LUXGEN FUN+ в районе Tsou-Ma-Lai Farm</h5>
                                </li>
                                <li><img src="<?= $this->baseAssets.'/img/userfiles/chronicle/small/20120913172023964.jpg';?>"></li>

                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineMargin ContTimelineRight">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop">
                                    <time class="TimelineDate">2011.10.09</time>
                                    <h5 class="TimelineTitle">Всемирная выставка дизайна в Тайбэе – Открытие павильона
                                        дизайна LUXGEN Design+</h5>
                                </li>
                                <li><img src="<?= $this->baseAssets.'/img/userfiles/chronicle/small/20120921163411479.jpg';?>"></li>

                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineLeft">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop">
                                    <time class="TimelineDate">2011.07.19</time>
                                    <h5 class="TimelineTitle">Выход LUXGEN в список «Top 100» тайваньских брендов</h5>
                                </li>
                                <li><img src="<?= $this->baseAssets.'/img/userfiles/chronicle/small/20120921163427810.jpg';?>"></li>

                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineMargin ContTimelineRight">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop">
                                    <time class="TimelineDate">2011.07.09</time>
                                    <h5 class="TimelineTitle">Сервис LUXGEN FOYU совместно с арендой iPad2</h5>
                                </li>
                                <li><img src="<?= $this->baseAssets.'/img/userfiles/chronicle/small/20120913172000340.jpg';?>"></li>

                            </ul>
                        </li>
                        <li class="ContTimelineList ContTimelineLeft">
                            <ul class="TimelineBox">

                                <li class="ContTimelineTop">
                                    <time class="TimelineDate">2011.04.10</time>
                                    <h5 class="TimelineTitle">Первый показ шоу Экстремального вождения вслепую на
                                        автомобилях LUXGEN7 SUV</h5>
                                </li>
                                <li><img src="<?= $this->baseAssets.'/img/userfiles/chronicle/small/20120913171936563.jpg';?>"></li>

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

