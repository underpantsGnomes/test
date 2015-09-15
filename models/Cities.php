<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property integer $id
 * @property string $cities_name_ru
 * @property string $cities_name_ua
 * @property string $cities_name_en
 * @property integer $id_areas
 * @property string $city_translit
 * @property string $on_off
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cities_name_ru', 'cities_name_ua', 'cities_name_en', 'id_areas', 'city_translit'], 'required'],
            [['id_areas'], 'integer'],
            [['on_off'], 'string'],
            [['cities_name_ru', 'cities_name_ua', 'cities_name_en'], 'string', 'max' => 200],
            [['city_translit'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cities_name_ru' => 'Cities Name Ru',
            'cities_name_ua' => 'Cities Name Ua',
            'cities_name_en' => 'Cities Name En',
            'id_areas' => 'Id Areas',
            'city_translit' => 'City Translit',
            'on_off' => 'On Off',
        ];
    }
}
