<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "superPremiumTM".
 *
 * @property integer $id
 * @property integer $client
 * @property integer $tm
 */
class SuperPremiumTM extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'superPremiumTM';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client', 'tm'], 'required'],
            [['client', 'tm'], 'integer']
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
            'tm' => 'Tm',
        ];
    }
}
