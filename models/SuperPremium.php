<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "superPremium".
 *
 * @property integer $id
 * @property integer $manager
 * @property integer $client
 * @property string $place
 * @property integer $cityId
 * @property string $date
 * @property string $comm
 * @property string $shop
 * @property string $seller
 * @property string $sellerPhone
 */
class SuperPremium extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'superPremium';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manager', 'client', 'place', 'cityId', 'date', 'comm', 'shop', 'seller', 'sellerPhone','last_name','users.last_name','users.first_name'], 'required'],
            [['manager', 'client', 'cityId'], 'integer'],
            [['date'], 'string'],
            [['place', 'comm', 'shop', 'seller'], 'string', 'max' => 255],
            [['sellerPhone'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manager' => 'Менеджер',
            'client' => 'Клиент',
            'place' => 'Адрес',
            'cityId' => 'City ID',
            'date' => 'Дата',
            'comm' => 'Комментарий',
            'shop' => 'Магазин',
            'seller' => 'Продавец',
            'sellerPhone' => 'Телефон продавца',
        ];
    }

    public function attributes()
    {

        return array_merge(Users::attributes(), ['first_name','last_name']);
    }

    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['id_user' => 'client']);
    }


    public function getTradeMarks($client){
        $tm = SuperPremiumTM::find()
            ->asArray()
            ->join('LEFT JOIN', 'tm', 'SuperPremiumTM.tm = tm.id_tm')
            ->distinct()
            ->addSelect(['SuperPremiumTM.tm','tm.tm_name'])
            ->where(['client' => $client])
            ->limit('3')
            ->all();

        $tms = null;
        foreach($tm as $key => $value){
            $tms .= '<span class="lead label tm">'.$value['tm_name'].'</span> ';
        };
        return $tms;
    }
    public function getUserUr($id){
        $users = Users::find()
            ->addSelect(['users.ur_name'])
            ->where(['id_user' => $id])
            ->one();
        return '<a href="http://zoobonus.ua/admin/user_info.php?id='.$id.'">'.$users->ur_name.'</a>';
    }
    public function getPhoto($thread){
        $photo = SuperPremiumPhotos::find()
            ->addSelect(['SuperPremiumPhotos.photo'])
            ->where(['thread' => $thread])
            ->one();
        return $photo->photo;
    }
    public function getPhotos($thread){
        $photos = SuperPremiumPhotos::find()
            ->asArray()
            ->addSelect(['SuperPremiumPhotos.photo'])
            ->where(['thread' => $thread])
            ->all();
        return $photos;
    }
    public function viewModel($id){

        $model = SuperPremium::findOne($id);
        $model
            ->join('LEFT JOIN', 'users', 'SuperPremium.client = users.id_user and SuperPremium.manager = users.id_user')
            ->addSelect(['SuperPremium.*','users.first_name'])
            ->where(['id' => $id])
            ->all();

        return $model;
    }
}
