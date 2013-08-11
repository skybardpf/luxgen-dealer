<?php
/**
 * Галерия изображения модели автомобиля.
 *
 * @author Skibardin Andrey <skybardpf@artektvi.ru>
 *
 * @property Car $car
 */
class GalleryImage extends CActiveRecord
{
    public $filename;       // string
    public $car_id;         // int
    public $title;          // string
    public $description;    // string
    public $sort;           // int

    /**
     * @static
     * @param string $className
     * @return GalleryImage
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
        return 'gallery_image';
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'car' => array(self::BELONGS_TO, 'Car', 'car_id'),
        );
    }
}