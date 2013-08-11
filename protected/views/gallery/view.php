<?php
/**
 * @var GalleryController $this
 * @var GalleryImage $image
 */
?>

<?php
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/reset.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/colorbox.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.media.css');
Yii::app()->clientScript->registerCssFile($this->baseAssets . '/css/style.mediaBox.template.css');
Yii::app()->clientScript->registerCoreScript('query');

Yii::app()->clientScript->registerScriptFile('jquery.headerNav.js');
Yii::app()->clientScript->registerScriptFile('jquery.colorbox.js');
?>
<div class="pp_pic_holder light_square" style="top: 819.5px; left: 55px; display: block; width: 1410px;">
    <div class="ppt" style="opacity: 1; display: block; width: 1370px;">&nbsp;</div>
    <div class="pp_top">
        <div class="pp_left"></div>
        <div class="pp_middle"></div>
        <div class="pp_right"></div>
    </div>
    <div class="pp_content_container">
        <div class="pp_left">
            <div class="pp_right">
                <div class="pp_content" style="height: 425px; width: 1370px;">
                    <div class="pp_loaderIcon" style="display: none;"></div>
                    <div class="pp_fade" style="display: block;"><a href="javascript:;" class="pp_expand"
                                                                    title="Expand the image" style="display: none;">Expand</a>

                        <div class="pp_hoverContainer" style="height: 389px; width: 1370px; display: none;"><a
                                class="pp_next" href="javascript:;">next</a> <a class="pp_previous" href="javascript:;">previous</a>
                        </div>
                        <div id="pp_full_res">
                            <iframe src="<?= $this->baseAssets .'/img/cars/' . $image->car->primaryKey.'/gallery/'.$image->filename; ?>" width="1370"
                                    height="389" frameborder="no" allowtransparency="true"></iframe>
                        </div>
                        <div class="pp_details" style="width: 1370px;">
                            <div class="pp_nav"><a href="#" class="pp_play">Play</a> <a href="javascript:;"
                                                                                        class="pp_arrow_previous">Previous</a>

                                <p class="currentTextHolder">27/32</p>                                                <a
                                    href="javascript:;" class="pp_arrow_next">Next</a></div>
                            <p class="pp_description" style="display: none;"></p>

                            <div class="pp_social"></div>
                            <a class="pp_close" href="javascript:;">Close</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pp_bottom">
        <div class="pp_left"></div>
        <div class="pp_middle"></div>
        <div class="pp_right"></div>
    </div>
</div>