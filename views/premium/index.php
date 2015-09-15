<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\SuperPremium;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SuperPremiumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Super Premium';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="super-premium-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!--    --><?php
//    $model = new SuperPremium();
//    var_dump($model->getUserName(8696))
    ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['width' => '10']
            ],
            [
                'label' => 'Фото',
                'content' => function($data){
                    $model = new SuperPremium();
                    return '<img class="img-rounded thumbNails" src="http://zoobonus.ua/images/superPremium/'.$model->getPhoto($data->id).'">';
                }
            ],
            'shop',
            'place',
            [
                'label' => 'Менеджер',
                'content' => function(){
                    $model = new SuperPremium();
                    return $model->getFullName();
                }
            ],
            [
                'label' => 'Клиент',
                'content' => function(){
                    $model = new SuperPremium();
                    return $model->getFullName();
                }
            ],


            [
                'label' => 'Торговые марки',
                'headerOptions' => ['width' => '80','height' => '30' ],
                'content' => function($data){
                    $model = new SuperPremium();
                    return $model->getTradeMarks($data->client).'...';
                }
            ],
            [
                'label' => 'Дата',
                'contentOptions' =>function (){
                    return ['class' => 'name'];
                },
                'value' => 'date'
            ],

        ],
    ]); ?>

</div>
