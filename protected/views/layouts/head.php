<?php
/**
 * @var SiteController $this
 */
?>
<div class="topbar">
    <ul>
        <li><a href="<?= $this->createUrl('/site/dealer'); ?>">Информация для дилеров</a></li>
        <li><a href="<?= $this->createUrl('/news/'); ?>">Новости</a></li>
        <li><a href="<?= $this->createUrl('/gallery/'); ?>">Галерея</a></li>
        <li><a href="<?= $this->createUrl('/site/contact'); ?>">Контакты</a></li>
        <li>|</li>
        <li><a href="<?= $this->createAbsoluteUrl('/site/'); ?>">Главная</a></li>
    </ul>
</div>
<nav>
    <h1 title="Luxgen">
        <a class="png" href="<?= $this->createAbsoluteUrl('/site/'); ?>">Luxgen</a>
    </h1>
    <ul class="kindsNav">
        <li><a href="<?= $this->createUrl('/site/test_drive'); ?>">Тест-драйв</a></li>
        <li><a href="<?= $this->createUrl('/models/suv'); ?>">LUXGEN7 SUV</a></li>
    </ul>
</nav>