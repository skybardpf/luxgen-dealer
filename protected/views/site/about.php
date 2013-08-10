<?php
/**
 * @var SiteController $this
 */
?>

<div class="midWrap">
    <div class="HeaderSlide">&nbsp;</div>
    <div class="subNav subNavFixed both">
        <ul class="subNavUL both">
            <li class="NavList png"><a href="<?= $this->createUrl('brand_introduction'); ?>">О бренде LUXGEN</a></li>
            <li class="NavList png selected"><a href="<?= $this->createUrl('about'); ?>">Философия бренда</a></li>
            <li class="NavList png"><a href="<?= $this->createUrl('chronicles'); ?>">Хроники</a></li>
        </ul>
        <span class="subNavMask"></span></div>
    <div class="mainContent">
        <div class="cont">
            <div class="both titleFrame">
                <h3 class="title">Философия бренда</h3>
                <span class="tools" id="chooseFont">
                    <a class="fontDecrease" href="#" rel="fontSmall">Маленький</a>
                    <a class="fontReset" href="#" rel="fontNormal">Средний</a>
                    <a class="fontIncrease" href="#" rel="fontLarge">Большой</a>
                </span>
            </div>
            <div class="fontNormal" id="contentFont">
                <div class="ContAbout both ContData" style="padding-top: 336px;">
                    <div class="info">
                        <section>
                            <h5>THINK Ahead – Движение в будущее</h5>

                            <p>Философия LUXGEN заключена в уникальном понимании роскоши и гениальности (LUXURY &amp;
                                GENIUS). Говоря о роскоши, мы подразумеваем премиальный уровень обслуживания, в то время
                                как воплощением «гениальности» в автомобилях марки являются инновационные решения в
                                сфере безопасности и информационных технологий. Девиз компании - «Think Ahead»
                                («Движение в будущее»).</p></section>
                        <section>
                            <h5>LUXURY («Роскошь»)</h5>

                            <p>Придерживаясь девиза «Think Ahead», компания LUXGEN заботится о своих клиентах,
                                обеспечивая всестороннюю поддержку на всех этапах выбора, покупки и обслуживания
                                автомобилей марки.</p></section>
                        <section>
                            <h5>GENIUS («Гениальность»)</h5>

                            <p>Бортовая система LUXGEN THINK+ обладает рядом инновационных функций, которые помогают
                                избегать неприятных ситуаций на дороге, а также предоставляет удобный доступ к
                                мультимедийному контенту.</p></section>
                    </div>
                    <div class="media" style="margin-top: 23px;">
                        <div class="youtube">
                            <object width="450" height="253">
                                <param value="http://www.youtube.com/v/i1SpQL_rNpg?version=3&amp;hl=zh_TW&amp;rel=0"
                                       name="movie"/>
                                <param value="true" name="allowFullScreen"/>
                                <param value="true" name="allowFullScreen"/>
                                <param value="always" name="allowscriptaccess"/>
                                <param value="high" name="quality"/>
                                <param value="false" name="menu"/>
                                <param value="transparent" name="wmode"/>
                                <embed scale="scale" wmode="transparent" menu="false" quality="high"
                                       allowfullscreen="true" allowscriptaccess="always"
                                       type="application/x-shockwave-flash"
                                       src="http://www.youtube.com/v/i1SpQL_rNpg?version=3&amp;hl=zh_TW&amp;rel=0"
                                       height="253" width="450">
                            </object>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;" class="topBtn" id="topBtn">top</div>
    </div>

</div>
