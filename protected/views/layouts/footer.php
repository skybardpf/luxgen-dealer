<?php
/**
 * @var SiteController $this
 */
?>

<ul class="FootNav">
    <li class="FootNavLi01 png">
        <a href="<?= $this->createUrl('brand_introduction'); ?>">О компании LUXGEN</a>
    </li>
    <li class="FootNavLi02 png">
        <a href="<?= $this->createUrl('technology_advanced'); ?>">Передовые технологии</a>
    </li>
</ul>
<div class="fb-like" data-href="http://www.facebook.com/LuxgenRussia" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
<div class="fb_link">
    <a target="_blank" href="http://www.facebook.com/LuxgenRussia">
    <img src="<?= $this->baseAssets.'/img/facebook_icon_circle_512x512.png'; ?>" style="width:28px;">
    </a>
</div>
<ul class="siteMap">
    <li>
        <a href="<?= $this->createUrl('worldwidesites'); ?>">Luxgen в мире</a>
    </li>
    <li>
        <a href="<?= $this->createUrl('copyright'); ?>">Авторские права</a>
    </li>
    <li>
        <a href="<?= $this->createUrl('privacy'); ?>">Положение о конфиденциальности</a>
    </li>
</ul>
<script type="text/javascript">
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-41855838-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>