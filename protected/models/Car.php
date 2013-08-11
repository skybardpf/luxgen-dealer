<?php
/**
 * Модель автомобиля.
 *
 * @author Skibardin Andrey <skybardpf@artektvi.ru>
 *
 * @property GalleryImage[] galleryImages
 */
class Car extends CActiveRecord
{
    public $name;                       // string
    public $show_main_menu = false;     // bool
    public $deleted = false;            // bool

    /**
     * @static
     * @param string $className
     * @return Car
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
        return 'car';
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'galleryImages' => array(self::HAS_MANY, 'GalleryImage', 'car_id'),
        );
    }
}