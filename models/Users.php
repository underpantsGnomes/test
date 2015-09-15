<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id_user
 * @property string $pasword
 * @property string $email
 * @property string $face_uid
 * @property string $juridical
 * @property integer $id_group
 * @property integer $id_staff
 * @property integer $staff_agency
 * @property integer $staff_units
 * @property integer $confirm
 * @property integer $status
 * @property integer $plb_status
 * @property string $valid_cod
 * @property string $reg_date
 * @property string $lastchanged
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $about_me
 * @property string $discount
 * @property string $discount_pet_days
 * @property integer $type_discount
 * @property string $gor_tel_pr
 * @property string $gor_tel_kod
 * @property string $gor_tel
 * @property string $kont_kl_pr
 * @property string $kont_kl_kod
 * @property string $kont_kl
 * @property string $skype
 * @property string $icq
 * @property string $web_p
 * @property integer $skidka
 * @property string $sum_tov
 * @property integer $sum_bonus
 * @property integer $lock
 * @property string $numdisckont
 * @property integer $main_address
 * @property string $name
 * @property string $ur_name
 * @property string $post
 * @property integer $num_branch
 * @property integer $ppage
 * @property string $banner_big
 * @property string $advt
 * @property integer $advt_confirm
 * @property integer $in1C
 * @property integer $manager
 * @property string $ur_name_by_manager
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pasword', 'face_uid', 'staff_agency', 'staff_units', 'plb_status', 'valid_cod', 'reg_date', 'last_name', 'first_name', 'middle_name', 'about_me', 'gor_tel_kod', 'gor_tel', 'kont_kl_kod', 'kont_kl', 'skype', 'web_p', 'skidka', 'sum_tov', 'sum_bonus', 'numdisckont', 'name', 'ur_name', 'post', 'num_branch', 'banner_big', 'advt', 'ur_name_by_manager'], 'required'],
            [['face_uid', 'id_group', 'id_staff', 'staff_agency', 'staff_units', 'confirm', 'status', 'plb_status', 'type_discount', 'skidka', 'sum_bonus', 'lock', 'main_address', 'num_branch', 'ppage', 'advt_confirm', 'in1C', 'manager'], 'integer'],
            [['juridical', 'about_me', 'ur_name'], 'string'],
            [['reg_date', 'lastchanged'], 'safe'],
            [['discount', 'discount_pet_days', 'sum_tov'], 'number'],
            [['pasword', 'email', 'last_name', 'first_name', 'middle_name', 'web_p', 'banner_big', 'advt'], 'string', 'max' => 200],
            [['valid_cod', 'name', 'post', 'ur_name_by_manager'], 'string', 'max' => 255],
            [['gor_tel_pr', 'kont_kl_pr'], 'string', 'max' => 5],
            [['gor_tel_kod', 'kont_kl_kod'], 'string', 'max' => 7],
            [['gor_tel', 'kont_kl', 'numdisckont'], 'string', 'max' => 10],
            [['skype'], 'string', 'max' => 100],
            [['icq'], 'string', 'max' => 9],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'pasword' => 'Pasword',
            'email' => 'Email',
            'face_uid' => 'Face Uid',
            'juridical' => 'Juridical',
            'id_group' => 'Id Group',
            'id_staff' => 'Id Staff',
            'staff_agency' => 'Staff Agency',
            'staff_units' => 'Staff Units',
            'confirm' => 'Confirm',
            'status' => 'Status',
            'plb_status' => 'Plb Status',
            'valid_cod' => 'Valid Cod',
            'reg_date' => 'Reg Date',
            'lastchanged' => 'Lastchanged',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'about_me' => 'About Me',
            'discount' => 'Discount',
            'discount_pet_days' => 'Discount Pet Days',
            'type_discount' => 'Type Discount',
            'gor_tel_pr' => 'Gor Tel Pr',
            'gor_tel_kod' => 'Gor Tel Kod',
            'gor_tel' => 'Gor Tel',
            'kont_kl_pr' => 'Kont Kl Pr',
            'kont_kl_kod' => 'Kont Kl Kod',
            'kont_kl' => 'Kont Kl',
            'skype' => 'Skype',
            'icq' => 'Icq',
            'web_p' => 'Web P',
            'skidka' => 'Skidka',
            'sum_tov' => 'Sum Tov',
            'sum_bonus' => 'Sum Bonus',
            'lock' => 'Lock',
            'numdisckont' => 'Numdisckont',
            'main_address' => 'Main Address',
            'name' => 'Name',
            'ur_name' => 'Ur Name',
            'post' => 'Post',
            'num_branch' => 'Num Branch',
            'ppage' => 'Ppage',
            'banner_big' => 'Banner Big',
            'advt' => 'Advt',
            'advt_confirm' => 'Advt Confirm',
            'in1C' => 'In1 C',
            'manager' => 'Manager',
            'ur_name_by_manager' => 'Ur Name By Manager',
        ];
    }
}
