<?php
/**
 * @var GalleryController   $this
 * @var GalleryImage[]      $data
 */
?>

<?php
    Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.media.css');
    Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/colorbox.css');

    Yii::app()->clientScript->registerScriptFile($this->baseAssets . '/js/jquery.colorbox.js');
?>

<div class="midWrap">
<div class="HeaderSlide"></div>
<div class="subNav subNavFixed both">
    <ul class="subNavUL both">
        <li class="NavList png selected" id="li1" style="display: list-item;"><a href="<?= $this->createUrl('/gallery'); ?>">Изображения</a></li>
    </ul>
    <span class="subNavMask"></span>
</div>
<div class="mainContent">
<div class="cont media">
<div class="both titleFrame">
    <h3 class="title">Галерея</h3>
</div>
<ul>
<?php
    $dir = $this->baseAssets .'/img/cars/';
    foreach ($data as $image){
        $path = $dir . $image->car->primaryKey.'/gallery/'.$image->filename;
        ?>
        <li class="mediaList" rel="prettyPhoto[iframe]" href="<?= $this->createUrl('view', array('id' => $image->primaryKey)); ?>?iframe=true&width=100%25&height=100%25">
            <img width="286" height="167" src="<?= $path; ?>">
            <div class="active png" style="display: none;">
                <ul class="Article">
                    <li class="title"><?= $image->title; ?></li>
                </ul>
            </div>
        </li>
    <?php
    }
?>
<!--<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/6?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/20121011184757202.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/9?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/20121011184729397.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/10?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/20121011184659594.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/11?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/20121011184617883.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/12?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/20121011183618561.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/13?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/20121011183643132.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/14?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/20121011183228348.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/15?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/01.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/16?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/02.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/17?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/03.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/18?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/04.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/19?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/05.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/20?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_01.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/21?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_02.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/22?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_03.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/23?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_04.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/24?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_05.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/25?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_06.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/26?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_07.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/27?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_08.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/28?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_09.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/29?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_10.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/30?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_11.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>
<li class="mediaList" rel="prettyPhoto[iframe]" href="/gallery/id/31?iframe=true&width=100%25&height=100%25">
    <img src="/userfiles/imgs/small/suv_12.jpg">

    <div class="active png" style="display: none;">
        <ul class="Article">
            <li class="title">LUXGEN 7 SUV</li>
        </ul>
    </div>
</li>-->
</ul>
</div>
</div>


</div>
