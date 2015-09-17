<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuperPremium */

$this->title = 'Редактировать: ' . ' ' . $model->shop;
$this->params['breadcrumbs'][] = ['label' => 'Super Premium', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="super-premium-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
