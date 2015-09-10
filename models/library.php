<?php

namespace app\models;

use Yii;


class library extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'book';
    }

    public function getBook()
    {
        return $this->hasMany(Book::className(), ['author' => 'id']);
    }

    public  function getAuthor()
    {
        return $this->hasMany(Author::className(), ['id' => 'author']);
    }


}