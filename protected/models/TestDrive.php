<?php
/**
 * Запись на тест-драйв.
 *
 * @author Skibardin Andrey <skybardpf@artektvi.ru => '
 */
class TestDrive extends CActiveRecord
{
    public $created;    // date
    public $surname;    // string
    public $name;       // string
    public $patronymic; // string
    public $age;        // int
    public $city;       // string
    public $start_time; // date
    public $end_time;   // date
    public $phone;      // string
    public $email;      // string

    public function behaviors(){
        return array(
           'CTimestampBehavior' => array(
               'class' => 'zii.behaviors.CTimestampBehavior',
               'createAttribute' => 'created',
           )
        );
    }

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
        return 'test_drive';
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return array(
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'age' => 'Возраст (полных лет)',
            'city' => 'Город проживания',
            'phone' => 'Контактный телефон',
            'email' => 'Электронная почта',
            'start_time' => 'Удобное время, с',
            'end_time' => 'Удобное время, по',
        );
    }

    /**
     * @return array
     */
    public function rules()
    {
        return array(
            array('surname, name, patronymic', 'required'),
            array('surname, name, patronymic', 'length', 'max'=>50),

            array('age', 'required'),
            array('age', 'numerical', 'integerOnly'=>true, 'max'=>99),

            array('city', 'required'),
            array('city', 'length', 'max'=>50),

            array('phone', 'required'),
            array('phone', 'numerical', 'integerOnly'=>true),
            array('phone', 'length', 'max'=>11, 'min'=>11),

            array('email', 'required'),
            array('email', 'email'),

            array('start_time, end_time', 'required'),
            array('start_time, end_time', 'in', 'range' => array_keys(TestDrive::listTime())),
        );
    }

    /**
     * @return array
     */
    public static function listTime()
    {
        return array(
            '09:00' => '09:00',
            '09:30' => '09:30',
            '10:00' => '10:00',
            '10:30' => '10:30',
            '11:00' => '11:00',
            '11:30' => '11:30',
            '12:00' => '12:00',
            '12:30' => '12:30',
            '13:00' => '13:00',
            '13:30' => '13:30',
            '14:00' => '14:00',
            '14:30' => '14:30',
            '15:00' => '15:00',
            '15:30' => '15:30',
            '16:00' => '16:00',
            '16:30' => '16:30',
            '17:00' => '17:00',
            '17:30' => '17:30',
            '18:00' => '18:00',
            '18:30' => '18:30',
            '19:00' => '19:00',
            '19:30' => '19:30',
            '20:00' => '20:00',
            '20:30' => '20:30',
            '21:00' => '21:00'
        );
    }
}