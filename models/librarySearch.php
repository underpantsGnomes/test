<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
class librarySearch extends library
{
    public $author;
    public $book;


    public function rules()
    {
        return [

            [['author', 'book'], 'safe'],

        ];
    }

    public function search($params)
    {
        // create ActiveQuery
        $query = library::find();
        // Important: lets join the query with our previously mentioned relations
        // I do not make any other configuration like aliases or whatever, feel free
        // to investigate that your self
        $query->joinWith(['author']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        $dataProvider->sort->attributes['author'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['author.name' => SORT_ASC],
            'desc' => ['author.name' => SORT_DESC],
        ];
        // Lets do the same with country now

        // No search? Then return data Provider
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        // We have to do some search... Lets do some magic
        $query->andFilterWhere([
            //... other searched attributes here
        ])
            // Here we search the attributes of our relations using our previously configured
            // ones in "TourSearch"
            ->andFilterWhere(['like', 'book.name', $this->book])
            ->andFilterWhere(['like', 'author.name', $this->author]);

        return $dataProvider;
    }
}
