<?php
/**
 * @var string $content
 */
?>
<?php
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/jquery-ui.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/jquery.pnotify.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/reset.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.chooseFont.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.template.css');
//Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/jquery.cluetip.css');

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile($this->baseAssets . '/js/jquery.pnotify.js');
Yii::app()->clientScript->registerScriptFile($this->baseAssets . '/js/jquery.youtube.js');
Yii::app()->clientScript->registerScriptFile($this->baseAssets . '/js/jquery.ContentSet.js');
Yii::app()->clientScript->registerScriptFile($this->baseAssets . '/js/common.js');
//Yii::app()->clientScript->registerScriptFile($this->baseAssets . '/js/jquery.cluetip.js');

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?= $this->pageTitle; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
</head>

<body>

<div id="fb-root"></div>

<div class="Wrap">
    <header>
        <?= $this->renderPartial('//layouts/head'); ?>
    </header>

    <?= $content; ?>

    <footer>
        <?= $this->renderPartial('//layouts/footer'); ?>
    </footer>
</div>
</body>
</html>