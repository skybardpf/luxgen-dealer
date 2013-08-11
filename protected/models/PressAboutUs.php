<?php
/**
 * Пресса о нас.
 *
 * @author Skibardin Andrey <skybardpf@artektvi.ru>
 */
class PressAboutUs extends CActiveRecord
{
    const DISPLAY_YES   = 1;
    const DISPLAY_NO    = 0;

    const DELETED_YES   = 1;
    const DELETED_NO    = 0;

    const ARTICLE_TYPE_LINK = 1;
    const ARTICLE_TYPE_FILE = 2;
    const ARTICLE_TYPE_TEXT = 3;

    public $title;              // string
    public $source_of_article;  // string
    public $source_link;        // string
    public $created;            // date
    public $annotation;         // string
    public $article_type;       // int
    public $display;            // bool
    public $deleted;            // bool
    public $link;               // string
    public $file;               // string
    public $text;               // string

    /**
     * @static
     * @param string $className
     * @return PressAboutUs
     */
    public static function model($className = __CLASS__)
    {
        return new $className;
    }

    /**
     * @return string the table name
     */
    public function tableName()
    {
        return 'press_about_us';
    }
}