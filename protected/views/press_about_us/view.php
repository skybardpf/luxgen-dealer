<?php
/**
 * @var Press_about_usController $this
 * @var PressAboutUs $model
 */
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
<div class="newsTitle no_marg">
    <h3 class="press_title"><?= $model->title; ?></h3>

    <h3 class="press">Источник:
        <?php
            if (empty($model->source_link)){
                echo $model->source_of_article;
            } else {
                echo '<a class="blue_link press" href="'.$model->source_link.'">'.$model->source_of_article.'</a>';
            }
        ?>
    </h3>
</div>
<div id="contentFont" class="fontNormal">
<div class="ContData">
<div>
<ul class="ContNews">
<li class="ContNewsLeft">
<div>
<p><span class="press_date">Дата：<?= date('Y.m.d', strtotime($model->created)); ?></span></p>

<?= $model->text; ?>
</div>
</div>
</div>
<div id="topBtn" class="topBtn" style="display: none;"><span></span></div>
</div>
</div>