<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

class Library extends \yii\db\ActiveRecord
{

    public function relation(){
        $query = Book::find()
            ->addSelect(['book.*','author.*']);

        $query->joinWith(['author' => function ($query) {
            $query->from(['author']);

        }]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 5
            ]

        ]);



        return $dataProvider;
    }
}