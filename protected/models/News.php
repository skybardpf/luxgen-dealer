<?php
/**
 * Новость.
 *
 * @author Skibardin Andrey <skybardpf@artektvi.ru>
 */
class News extends CActiveRecord
{
    const DISPLAY_YES   = 1;
    const DISPLAY_NO    = 0;

    const DELETED_YES   = 1;
    const DELETED_NO    = 0;

    public $title;              // string
    public $text;               // string
    public $image;              // string
    public $created;            // date
    public $display = true;     // bool
    public $deleted = false;    // bool

    /**
     * @static
     * @param string $className
     * @return News
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
        return 'news';
    }
}