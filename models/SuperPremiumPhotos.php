<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "superPremiumPhotos".
 *
 * @property integer $id
 * @property integer $client
 * @property string $photo
 * @property integer $thread
 */
class SuperPremiumPhotos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'superPremiumPhotos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client', 'photo', 'thread'], 'required'],
            [['client', 'thread'], 'integer'],
            [['photo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client' => 'Client',
            'photo' => 'Photo',
            'thread' => 'Thread',
        ];
    }
}
