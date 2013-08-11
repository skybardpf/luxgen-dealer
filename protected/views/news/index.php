<?php
/**
 * @var NewsController  $this
 * @var News[]          $data
 */
?>

<?php
    Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.timeline.css');
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
                            <?php
                            foreach($data as $news){
                                $time = strtotime($news->created);
                                $created = date('Y.m.d', $time);
                                $month_num = date('n', $time);
                                $month_name = date('M', $time);
                                ?>

                                <li class="ContTimelineList">
                                    <span sid="<?= $month_num; ?>" class="TimelineYear" id="<?= 'monthcont' . $month_num; ?>"><?= $month_name; ?></span>
                                    <ul class="TimelineBox">
                                        <a href="<?= $this->createUrl('view', array('id' => $news->primaryKey)); ?>">
                                            <li class="ContTimelineTop">
                                                <time class="TimelineDate"><?= $created; ?></time>
                                                <h5 class="TimelineTitle"><?= $news->title; ?></h5>
                                            </li>
                                            <li><img src="<?= $this->baseAssets.'/img/news/'.$news->primaryKey.'/'.$news->image; ?>">
                                            </li>
                                        </a>
                                    </ul>
                                </li>

                                <?php
                            }
                            ?>
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