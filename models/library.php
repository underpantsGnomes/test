<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

class Library extends \yii\db\ActiveRecord
{

    public function relation(){
        $query = Book::find()
            ->addSelect(['book.*','author.*']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $query->joinWith(['author' => function ($query) {
            $query->from(['author']);
        }]);

        return $dataProvider;
    }
}