<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuperPremium;

/**
 * SuperPremiumSearch represents the model behind the search form about `app\models\SuperPremium`.
 */
class SuperPremiumSearch extends SuperPremium
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'manager', 'client', 'cityId'], 'integer'],
            [['place', 'date', 'comm', 'shop', 'seller', 'sellerPhone','last_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SuperPremium::find()
            ->addSelect(['superPremium.*','users.last_name','users.first_name'])
            ->joinWith(['users' => function ($query) { $query->from(['users']);}])
            ->orderBy('id DESC');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,

        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'manager' => $this->manager,
            'client' => $this->client,
        ]);
        $dataProvider->sort->attributes['users.last_name'] = [
            'asc' => ['last_name' => SORT_ASC],
            'desc' => ['last_name' => SORT_DESC],
        ];
        $query->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'comm', $this->comm])
            ->andFilterWhere(['like', 'shop', $this->shop])
            ->andFilterWhere(['like', 'seller', $this->seller])
            ->andFilterWhere(['like', 'sellerPhone', $this->sellerPhone])
            ->andFilterWhere(['LIKE', 'last_name', $this->getAttribute('last_name')]);
        return $dataProvider;
    }
}
