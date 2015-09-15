<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tm".
 *
 * @property integer $id_tm
 * @property string $tm_name
 * @property string $tm_name_for_pic
 * @property string $tm_link
 * @property string $img
 * @property string $full_description_ru
 * @property string $full_description_ua
 * @property string $full_description_en
 * @property string $short_description_ru
 * @property string $short_description_ua
 * @property string $short_description_en
 * @property string $country
 * @property integer $popularity
 * @property integer $active
 */
class Tm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tm_name', 'tm_name_for_pic', 'tm_link', 'full_description_ru', 'full_description_ua', 'full_description_en', 'short_description_ru', 'short_description_ua', 'short_description_en', 'country', 'popularity'], 'required'],
            [['full_description_ru', 'full_description_ua', 'full_description_en', 'short_description_ru', 'short_description_ua', 'short_description_en'], 'string'],
            [['popularity', 'active'], 'integer'],
            [['tm_name', 'tm_name_for_pic', 'tm_link', 'img'], 'string', 'max' => 200],
            [['country'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tm' => 'Id Tm',
            'tm_name' => 'Tm Name',
            'tm_name_for_pic' => 'Tm Name For Pic',
            'tm_link' => 'Tm Link',
            'img' => 'Img',
            'full_description_ru' => 'Full Description Ru',
            'full_description_ua' => 'Full Description Ua',
            'full_description_en' => 'Full Description En',
            'short_description_ru' => 'Short Description Ru',
            'short_description_ua' => 'Short Description Ua',
            'short_description_en' => 'Short Description En',
            'country' => 'Country',
            'popularity' => 'Popularity',
            'active' => 'Active',
        ];
    }
}
