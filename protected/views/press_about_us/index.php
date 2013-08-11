<?php
/**
 * @var Press_about_usController    $this
 * @var PressAboutUs[]              $data
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
                        <?php
                            foreach($data as $article){
                                $time = strtotime($article->created);
                                $created = date('Y.m.d', $time);
                                $year = date('Y', $time);
                                if ($article->article_type == PressAboutUs::ARTICLE_TYPE_LINK){
                                    $link = $article->link;
                                } elseif ($article->article_type == PressAboutUs::ARTICLE_TYPE_FILE){
                                    $link = $this->createUrl($article->file);
                                } elseif ($article->article_type == PressAboutUs::ARTICLE_TYPE_TEXT){
                                    $link = $this->createUrl('view', array('id' => $article->primaryKey));
                                } else {
                                    continue;
                                }
//                                var_dump($link);
//                                var_dump($article->article_type);
                            ?>
                                <li class="ContTimelineList ContTimelineLeft">
                                    <span class="TimelineYear"><?= $year; ?></span>
                                    <ul class="TimelineBox">

                                        <li class="ContTimelineTop press">
                                            <time class="TimelineDate"><?= $created; ?></time>
                                            <h5 class="TimelineTitle"><?= $article->title; ?></h5>
                                            <h5 class="TimelineTitle grey"><?= $article->source_of_article; ?></h5>
                                        </li>
                                        <li class="lefter">
                                        <p><?= $article->annotation; ?></p>
                                        </li>
                                        <li class="lefter" style="margin-bottom: 10px;">
                                            <a class="blue_link" href="<?= $link    ; ?>">Статья целиком</a>
                                        <li>
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