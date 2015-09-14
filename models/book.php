<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property integer $author
 * @property string $name
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
            [['author', 'name'], 'required'],
            [['author.name'], 'safe'],
            [['name'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {

        return [
            'id' => 'ID',
            'author' => 'Author',
            'name' => 'Name',
            'author.name' => 'Author name'
        ];
    }
    public function attributes()
    {

        return array_merge(Author::attributes(), ['author.name']);
    }

    public function getAuthor()
    {
        return $this->hasMany(Author::className(), ['id' => 'author']);
    }
}
