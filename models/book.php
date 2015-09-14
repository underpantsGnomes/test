<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property integer $author
 * @property string $bookName
 *
 * @property string $authorName
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookName','authorName'], 'required'],

            [['bookName'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bookName' => 'Book Name',
        ];
    }
    public function attributes()
    {
        // add related fields to searchable attributes
        return array_merge(parent::attributes(), ['authorName']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasMany(Author::className(), ['id' => 'author']);
    }
}
